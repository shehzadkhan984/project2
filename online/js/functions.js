
function showData() {
    for (var i = 0; i < items.length; i++) {
        document.getElementById("mainDiv").innerHTML += `<div id=` + i + ` class="image"  onmouseout="hideButtons(` + i + `)" onmouseover="showButtons(` + i + `)"><h4>` + items[i].name + `</h4><h4 class="price">Rs: ` + items[i].price + `/-</h4><img src="./images/` + items[i].image + `" alt="" class="imageSize" ><div class="btn"><button class="button" onclick="decrementItem(` + i + `)"><i class="fa fa-minus fa-3x"></i></button><button class="button" onclick="incrementItem(` + i + `)"><i class="fa fa-plus fa-3x"></i></button></div></div>`;
    }
}
function showButtons(id) {
    var node = document.getElementById(id);
    node.children[3].children[0].style.opacity = 0.7
    node.children[3].children[1].style.opacity = 0.7
}
function hideButtons(id) {
    var node = document.getElementById(id);
    node.children[3].children[0].style.opacity = 0
    node.children[3].children[1].style.opacity = 0
}

function incrementItem(index) {
    var i = items[index];
    var elementPosition = whishListItems.map(function (item) {
        return item.id
    }).indexOf(i.id);
    elementPosition > -1 ? whishListItems[elementPosition].quantity++ : (i.quantity++ , whishListItems.push(i));
    countTotalItems();
    localStorage.setItem("whishlist", JSON.stringify(whishListItems));
}

function decrementItem(index) {
    var i = items[index];
    var elementPosition = whishListItems.map(function (item) {
        return item.id
    }).indexOf(i.id);
    elementPosition > -1 && whishListItems[elementPosition].quantity > 0 ? whishListItems[elementPosition].quantity-- : elementPosition > -1 && whishListItems[elementPosition].quantity == 0 ? whishListItems.splice(elementPosition, 1) : false;
    countTotalItems();
    whishListItems.length > 0 ? localStorage.setItem("whishlist", JSON.stringify(whishListItems)) : localStorage.removeItem("whishlist");
}
function countTotalItems() {
    totalItems = 0;
    whishListItems.forEach(function (item) {
        totalItems += item.quantity;
    })
    document.getElementById("whishlist").innerHTML = totalItems;
}
