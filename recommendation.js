
fetch(`https://www.themealdb.com/api/json/v2/9973533/randomselection.php`)
    .then((response) => {
        if (response.ok) {
            return response.json();
        }
    })
    .then(data => {
        console.log(data);
        randamRecommend(data);
    })

function randamRecommend(data) {

    const meal1 = data.meals[0];
    const meal2 = data.meals[1];
    const meal3 = data.meals[2];
    const meal4 = data.meals[3];

    const mealDiv1 = document.getElementById("receipe1");
    const mealDiv2 = document.getElementById("receipe2");
    const mealDiv3 = document.getElementById("receipe3");
    const mealDiv4 = document.getElementById("receipe4");


    const mealImg1 = document.createElement("img");
    mealImg1.src = meal1.strMealThumb;
    mealDiv1.appendChild(mealImg1);

    const mealName1 = meal1.strMeal;
    const mealTitle1 = document.createElement("h3");
    mealTitle1.innerHTML = mealName1;
    mealDiv1.appendChild(mealTitle1);

    var mealHow1 = meal1.strInstructions;
    const mealIns1 = document.createElement("p");
    mealIns1.innerHTML = mealHow1;
    mealDiv1.appendChild(mealIns1);


    const mealVideo1 = meal1.strYoutube;
    const mealWatrch1 = document.createElement("a");
    mealWatrch1.href = mealVideo1;
    mealWatrch1.target = "_black";
    mealWatrch1.innerHTML = "Watch the Video";
    mealDiv1.appendChild(mealWatrch1);


    const mealImg2 = document.createElement("img");
    mealImg2.src = meal2.strMealThumb;
    mealDiv2.appendChild(mealImg2);

    const mealName2 = meal2.strMeal;
    const mealTitle2 = document.createElement("h3");
    mealTitle2.innerHTML = mealName2;
    mealDiv2.appendChild(mealTitle2);

    var mealHow2 = meal2.strInstructions;
    const mealIns2 = document.createElement("p");
    mealIns2.innerHTML = mealHow2;
    mealDiv2.appendChild(mealIns2);


    const mealVideo2 = meal2.strYoutube;
    const mealWatrch2 = document.createElement("a");
    mealWatrch2.href = mealVideo2;
    mealWatrch2.target = "_black";
    mealWatrch2.innerHTML = "Watch the Video";
    mealDiv2.appendChild(mealWatrch2);

    const mealImg3 = document.createElement("img");
    mealImg3.src = meal3.strMealThumb;
    mealDiv3.appendChild(mealImg3);

    const mealName3 = meal3.strMeal;
    const mealTitle3 = document.createElement("h3");
    mealTitle3.innerHTML = mealName3;
    mealDiv3.appendChild(mealTitle3);

    var mealHow3 = meal3.strInstructions;
    const mealIns3 = document.createElement("p");
    mealIns3.innerHTML = mealHow3;
    mealDiv3.appendChild(mealIns3);


    const mealVideo3 = meal3.strYoutube;
    const mealWatrch3 = document.createElement("a");
    mealWatrch3.href = mealVideo3;
    mealWatrch3.target = "_black";
    mealWatrch3.innerHTML = "Watch the Video";
    mealDiv3.appendChild(mealWatrch3);

    const mealImg4 = document.createElement("img");
    mealImg4.src = meal4.strMealThumb;
    mealDiv4.appendChild(mealImg4);

    const mealName4 = meal4.strMeal;
    const mealTitle4 = document.createElement("h3");
    mealTitle4.innerHTML = mealName4;
    mealDiv4.appendChild(mealTitle4);

    var mealHow4 = meal4.strInstructions;
    const mealIns4 = document.createElement("p");
    mealIns4.innerHTML = mealHow4;
    mealDiv4.appendChild(mealIns4);


    const mealVideo4 = meal4.strYoutube;
    const mealWatrch4 = document.createElement("a");
    mealWatrch4.href = mealVideo4;
    mealWatrch4.target = "_black";
    mealWatrch4.innerHTML = "Watch the Video";
    mealDiv4.appendChild(mealWatrch4);



}

