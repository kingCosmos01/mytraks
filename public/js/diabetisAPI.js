let _ajax = new XMLHttpRequest();


_ajax.open("GET", "http://localhost/mytraks/package.json", true);

_ajax.onload = function() {
    if(this.status == 200 && this.readyState == 4) {

        let data = this.responseText;
        data = JSON.parse(data);

        console.log(data);

        let recommendations = "";
        let avoidables = "";

        for(let item of data) {

            recommendations += `
                <ul class="card">
                    <h2 class="card-title">${item.Diabetics.title}</h2>                    
                    <li class="card-item">
                        <h2 class="clickable">Fatty Fish</h2>
                        <p class="removeable">
                            ${item.Diabetics.Fattyfish}
                            <a href="http://localhost/mytraks/public/views/shop.php">Shop Now</a>
                        </p>
                    </li>
                    <li class="card-item">
                        <h2 class="clickable">Leafy Greens</h2>
                        <p class="removeable">
                            ${item.Diabetics.LeafyGreens}
                            <a href="http://localhost/mytraks/public/views/shop.php">Shop Now</a>
                        </p>
                    </li>
                    <li class="card-item">
                        <h2 class="clickable">Avocados</h2>
                        <p class="removeable">
                            ${item.Diabetics.Avocados}
                            <a href="http://localhost/mytraks/public/views/shop.php">Shop Now</a>
                        </p>
                    </li>                    
                    <li class="card-item">
                        <h2 class="clickable">Eggs</h2>
                        <p class="removeable">
                            ${item.Diabetics.Eggs}
                            <a href="http://localhost/mytraks/public/views/shop.php">Shop Now</a>
                        </p>
                    </li>                    
                    <li class="card-item">
                        <h2 class="clickable">Beans</h2>
                        <p class="removeable">
                            ${item.Diabetics.Beans}
                            <a href="http://localhost/mytraks/public/views/shop.php">Shop Now</a>
                        </p>
                    </li>                    
                    <li class="card-item">
                        <h2 class="clickable">Broccoli</h2>
                        <p class="removeable">
                            ${item.Diabetics.Broccoli}
                            <a href="http://localhost/mytraks/public/views/shop.php">Shop Now</a>
                        </p>
                    </li>                    
                </ul>
            `;

            avoidables += `
                <ul class="card">
                    <h2 class="card-title">${item.Diabetics.avoidable.title}</h2>                    
                    <li class="card-item">
                        <h2 class="clickable">Drinks With Added Sugars</h2>
                        <p class="removeable">${item.Diabetics.avoidable.DrinksWithAddedSugars}</p>
                    </li>
                    <li class="card-item">
                        <h2 class="clickable">Sugary Foods</h2>
                        <p class="removeable">${item.Diabetics.avoidable.Sugaryfoods}</p>
                    </li>
                    <li class="card-item">
                        <h2 class="clickable">Starchy Vegetables</h2>
                        <p class="removeable">${item.Diabetics.avoidable.StarchyVegetables}</p>
                    </li>
                </ul>
            `;

        }
        
        document.getElementById("recommendations").innerHTML = recommendations;
        document.getElementById("avoidable").innerHTML = avoidables;

    }
}


_ajax.send();