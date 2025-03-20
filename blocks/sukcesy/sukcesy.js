document.addEventListener("DOMContentLoaded", function () {
    let loadMoreBtn = document.getElementById("load-more-sukcesy");
    let filterList = document.getElementById("filter-category-sukcesy");
    let currentCategory = "all"; // Domyślnie wszystkie kategorie

    function fetchFilteredPostsSukcesy() {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", ajax_params.ajaxurl, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                let response = JSON.parse(xhr.responseText);
                
                document.getElementById("sukcesy-list").innerHTML = response.posts;
                loadMoreBtn.setAttribute("data-page-sukcesy", 1);
                loadMoreBtn.setAttribute("data-category-sukcesy", currentCategory);

                if (response.has_more === "false") {
                    loadMoreBtn.style.display = "none";
                } else {
                    loadMoreBtn.style.display = "flex";
                }
            }
        };

        let params = "action=filter_posts_sukcesy&category=" + encodeURIComponent(currentCategory);
        xhr.send(params);
    }

    function fetchMorePostsSukcesy() {
        let page = parseInt(loadMoreBtn.getAttribute("data-page-sukcesy"));
        let category = loadMoreBtn.getAttribute("data-category-sukcesy");

        let xhr = new XMLHttpRequest();
        xhr.open("POST", ajax_params.ajaxurl, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                let response = JSON.parse(xhr.responseText);

                if (response.posts.trim() === "") {
                    loadMoreBtn.style.display = "none";
                } else {
                    document.getElementById("sukcesy-list").insertAdjacentHTML("beforeend", response.posts);
                    loadMoreBtn.setAttribute("data-page-sukcesy", page + 1);
                }

                if (response.has_more === "false") {
                    loadMoreBtn.style.display = "none";
                } else {
                    loadMoreBtn.style.display = "flex";
                }
            }
        };

        let params = "action=load_more_sukcesy&category=" + encodeURIComponent(category) + "&page=" + page;
        xhr.send(params);
    }

    if (filterList) {
        filterList.addEventListener("click", function (event) {
            if (event.target.tagName === "LI") {
                document.querySelectorAll("#filter-category-sukcesy li").forEach(el => el.classList.remove("active"));
                event.target.classList.add("active");

                currentCategory = event.target.getAttribute("data-slug-sukcesy");
                fetchFilteredPostsSukcesy();
            }
        });
    }

    if (loadMoreBtn) {
        loadMoreBtn.addEventListener("click", function () {
            fetchMorePostsSukcesy();
        });
    }
});


