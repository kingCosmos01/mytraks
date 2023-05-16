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
                        <p class="removeable">${item.Diabetics.Fattyfish}</p>
                    </li>
                    <li class="card-item">
                        <h2 class="clickable">Leafy Greens</h2>
                        <p class="removeable">${item.Diabetics.LeafyGreens}</p>
                    </li>
                    <li class="card-item">
                        <h2 class="clickable">Avocados</h2>
                        <p class="removeable">${item.Diabetics.Avocados}</p>
                    </li>                    
                    <li class="card-item">
                        <h2 class="clickable">Eggs</h2>
                        <p class="removeable">${item.Diabetics.Eggs}</p>
                    </li>                    
                    <li class="card-item">
                        <h2 class="clickable">Beans</h2>
                        <p class="removeable">${item.Diabetics.Beans}</p>
                    </li>                    
                    <li class="card-item">
                        <h2 class="clickable">Broccoli</h2>
                        <p class="removeable">${item.Diabetics.Broccoli}</p>
                    </li>                    
                </ul>
            `;

            avoidables += `
                <ul class="card">
                    <h2 class="card-title">${item.Hepatitis.avoidable.title}</h2>                    
                    <li class="card-item">
                        <h2 class="clickable">Processed food items</h2>
                        <p class="removeable">${item.Hepatitis.avoidable.ProcessedFoodItems}</p>
                    </li>
                    <li class="card-item">
                        <h2 class="clickable">Hydrogenated Oils</h2>
                        <p class="removeable">${item.Hepatitis.avoidable.HydrogenatedOils}</p>
                    </li>
                    <li class="card-item">
                        <h2 class="clickable">sugar Intake</h2>
                        <p class="removeable">${item.Hepatitis.avoidable.sugarIntake}</p>
                    </li>
                </ul>
            `;

        }
        
        document.getElementById("recommendations").innerHTML = recommendations;
        document.getElementById("avoidable").innerHTML = avoidables;

    }
}


_ajax.send();