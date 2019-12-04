* Created by ccania.
 */
var para = document.querySelectorAll(".ellipsis");

for (var i = 0; i < para.length; i++) {
    var paraTxt = para[i].innerHTML;

    if (paraTxt.length > 200) {

        var newPara = document.createElement("p"); //create new paragraph element
        newPara.className = "ellipsis-trunc";
        var newParaTxt = document.createTextNode(paraTxt.substring(0,200)+"...");
        //create new text node

        newPara.appendChild(newParaTxt); //bind new text node to new element
        para[i].replaceWith(newPara);

    } else {
        console.log("I've got nothing");
    }

}
