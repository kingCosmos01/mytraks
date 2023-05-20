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
                    <h2 class="card-title">${item.Hepatitis.title}</h2>                    
                    <li class="card-item">
                        <h2 class="clickable">Fruits and Vegetables</h2>
                        <p class="removeable">
                            ${item.Hepatitis.FruitsandVegetables}   
                            <a href="http://localhost/mytraks/public/views/shop.php">Shop Now</a>
                        </p>
                    </li>
                    <li class="card-item">
                        <h2 class="clickable">Grains</h2>
                        <p class="removeable">
                            ${item.Hepatitis.Grains}
                            <a href="http://localhost/mytraks/public/views/shop.php">Shop Now</a>
                        </p>
                    </li>
                    <li class="card-item">
                        <h2 class="clickable">Proteins</h2>
                        <p class="removeable">
                            ${item.Hepatitis.proteins}
                            <a href="http://localhost/mytraks/public/views/shop.php">Shop Now</a>
                        </p>
                    </li>                    
                </ul>
            `;

            avoidables += `
                <ul class="card">
                    <h2 class="card-title">${item.Hepatitis.avoidable.title}</h2>                    
                    <li class="card-item">
                        <h2 class="clickable">Processed food items</h2>
                        <p class="removeable">
                            ${item.Hepatitis.avoidable.ProcessedFoodItems}
                        </p>
                    </li>
                    <li class="card-item">
                        <h2 class="clickable">Hydrogenated Oils</h2>
                        <p class="removeable">
                            ${item.Hepatitis.avoidable.HydrogenatedOils}
                        </p>
                    </li>
                    <li class="card-item">
                        <h2 class="clickable">sugar Intake</h2>
                        <p class="removeable">
                            ${item.Hepatitis.avoidable.sugarIntake}
                        </p>
                    </li>
                </ul>
            `;

        }
        
        document.getElementById("recommendations").innerHTML = recommendations;
        document.getElementById("avoidable").innerHTML = avoidables;

    }
}


_ajax.send();