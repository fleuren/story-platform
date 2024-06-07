function randomizer()
{
fetch("https://api.unsplash.com/photos/random?client_id=IDnetl_lLGfWu3jE04SZGnjOPJcLxcd8bxGqR3m9esM")
    .then(res => res.json())
    .then(res => {
        document.getElementById("photo_author").innerHTML = "Photo by: " + res.user.name + " from Unsplash.com (" + res.user.links.html + ")";
        document.getElementById("sample").src = "";
        document.getElementById("sample").src = res.urls.small_s3;
    })
}
    