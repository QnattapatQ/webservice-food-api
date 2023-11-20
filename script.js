document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById("search");
    const showList = document.getElementById("show-list");

    searchInput.addEventListener("keyup", function() {
        var searchText = this.value;
        if (searchText !== "") {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "search.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    showList.innerHTML = xhr.responseText;
                }
            };

            var data = "query=" + encodeURIComponent(searchText);
            xhr.send(data);
        } else {
            showList.innerHTML = "";
        }
    });

    document.addEventListener("click", function(event) {
        var target = event.target;
        if (target.tagName === "A") {
            searchInput.value = target.textContent;
            showList.innerHTML = "";
        }
    });
});