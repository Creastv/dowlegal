document.addEventListener("DOMContentLoaded", function () {
    let loadMoreBtn = document.getElementById("load-more");
    let filterList = document.getElementById("filter-category");
    let currentCategory = "all"; // Domyślnie wszystkie kategorie

    function fetchFilteredPosts() {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", ajax_params.ajaxurl, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                let response = JSON.parse(xhr.responseText);
                
                document.getElementById("media-list").innerHTML = response.posts;
                loadMoreBtn.setAttribute("data-page", 1);
                loadMoreBtn.setAttribute("data-category", currentCategory);

                if (response.has_more === "false") {
                    loadMoreBtn.style.display = "none";
                } else {
                    loadMoreBtn.style.display = "flex";
                }
            }
        };

        let params = "action=filter_posts&category=" + encodeURIComponent(currentCategory);
        xhr.send(params);
    }

    function fetchMorePosts() {
        let page = parseInt(loadMoreBtn.getAttribute("data-page"));
        let category = loadMoreBtn.getAttribute("data-category");

        let xhr = new XMLHttpRequest();
        xhr.open("POST", ajax_params.ajaxurl, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                let response = JSON.parse(xhr.responseText);

                if (response.posts.trim() === "") {
                    loadMoreBtn.style.display = "none";
                } else {
                    document.getElementById("media-list").insertAdjacentHTML("beforeend", response.posts);
                    loadMoreBtn.setAttribute("data-page", page + 1);
                }

                if (response.has_more === "false") {
                    loadMoreBtn.style.display = "none";
                } else {
                    loadMoreBtn.style.display = "flex";
                }
            }
        };

        let params = "action=load_more&category=" + encodeURIComponent(category) + "&page=" + page;
        xhr.send(params);
    }

    if (filterList) {
        filterList.addEventListener("click", function (event) {
            if (event.target.tagName === "LI") {
                document.querySelectorAll("#filter-category li").forEach(el => el.classList.remove("active"));
                event.target.classList.add("active");

                currentCategory = event.target.getAttribute("data-slug");
                fetchFilteredPosts();
            }
        });
    }

    if (loadMoreBtn) {
        loadMoreBtn.addEventListener("click", function () {
            fetchMorePosts();
        });
    }
});
