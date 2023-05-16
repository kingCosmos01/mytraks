let ajax = new XMLHttpRequest();

ajax.open('GET', 'http://localhost/mytraks/package.json', true);


ajax.onload = function () {

    if(this.readyState == 4 && this.status == 200) {

        let data = this.responseText;
        data = JSON.parse(data);

        console.log(data);

        let recommendations = "";
        let avoidables = "";

        for(let item of data) {
            recommendations += `
            <ul class="card">
                <h2 class="card-title">${item.Pregnancy.title}</h2>                    
                <li class="card-item">
                    <h2 class="clickable">Vegetables</h2>
                    <p class="removeable">${item.Pregnancy.Vegetables}</p>
                </li>
                <li class="card-item">
                    <h2 class="clickable">Fruits</h2>
                    <p class="removeable">${item.Pregnancy.Fruits}</p>
                </li>
                <li class="card-item">
                    <h2 class="clickable">Diary</h2>
                    <p class="removeable">${item.Pregnancy.Diary}</p>
                </li>
                <li class="card-item">
                    <h2 class="clickable">Grains</h2>
                    <p class="removeable">${item.Pregnancy.Grains}</p>
                </li>
                <li class="card-item">
                    <h2 class="clickable">Proteins</h2>
                    <p class="removeable">${item.Pregnancy.Proteins}</p>
                </li>
            </ul>
            `;

            avoidables += `
                <ul class="card">
                    <h2 class="card-title">${item.Pregnancy.avoidable.title}</h2>                    
                    <li class="card-item">
                        <h2 class="clickable">Foods to Avoid During Pregnancy</h2>
                        <p class="removeable">${item.Pregnancy.avoidable.body}</p>
                    </li>    
                </ul>
            `;
        }

        const recommend = document.getElementById("recommendations").innerHTML = recommendations;
        const avoid = document.getElementById("avoidable").innerHTML = avoidables;

    }
}

ajax.send();

