const searchButton = document.getElementById("searchButton");
const result = document.getElementById("searchResult");
const mealDetailsPop = document.querySelector(".sMealDetailsContent");
const mealDetailsPopFull = document.querySelector(".sMealDetails");
const closeMealDetails = document.getElementById("sCloseDetail");

searchButton.addEventListener('click', getMeal);
result.addEventListener('click', getDetails);
closeMealDetails.addEventListener('click', () => {
    mealDetailsPopFull.style.display = "none";
});
document.addEventListener('click', function (e) {
    //code adapted from DevDreamz, n.d.
    var parent;
    if (!(parent = e.target.closest('#sMealDetailsContent')))
    //end of adapted code
    {
        mealDetailsPopFull.style.display = "none";
    }

})


function getMeal() {
    const searchTitle = document.getElementById("searchTitle");
    searchTitle.style.display = "unset";



    let searchInput = document.getElementById('search-input').value.trim();

    fetch(`https://www.themealdb.com/api/json/v1/1/filter.php?i=${searchInput}`)
        .then(response => response.json())
        .then(mealData => {
            let Addedhtml = "";
            if (mealData.meals) {
                searchTitle.innerHTML = "Search Results:";
                mealData.meals.forEach(meal => {
                    Addedhtml += `
                        <div class = "mealItem" data-id = "${meal.idMeal}">
                            <div class = "sMealImg">
                                <img src = "${meal.strMealThumb}" alt = "Image of the meal">
                            </div>
                            <div class = "sMealName">
                                <h3>${meal.strMeal}</h3>
                                <a href = "#" class = "sMealButton">Get Instructions</a>
                            </div>
                        </div>
                        
                    `;
                });

            } else {
                searchTitle.innerHTML = "No recipe found";
            }
            result.innerHTML = Addedhtml;
        });

}

function getDetails(e) {
    e.preventDefault();
    if (e.target.classList.contains("sMealButton")) {
        let item = e.target.parentElement.parentElement;
        fetch(`https://www.themealdb.com/api/json/v1/1/lookup.php?i=${item.dataset.id}`)
            .then(response => response.json())
            .then(data => mealDetailsDisplay(data.meals));
    }
}

function mealDetailsDisplay(meal) {
    meal = meal[0];
    let addedHtml =
        `<div class="sMealDetailsContent">
    <div class="sMealDerailsImg"><img
            src="${meal.strMealThumb}" alt="Image of the meal">
    </div>
    <h3 class="sMealDetailsName">${meal.strMeal}</h3>
    <p class="sMealDetailsCat">${meal.strArea} Dish</p>
    <p class="sMealDetailsIns">${meal.strInstructions}</p>

    <a href="${meal.strYoutube}" target="_blank" class="sMealDetailsVideo">Watch the video</a>
</div>`;

    mealDetailsPop.innerHTML = addedHtml;
    mealDetailsPopFull.style.display = "block";

}