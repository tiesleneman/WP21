


 window.onload = () => {
    // assignment 1
    if (document.URL.includes("index.html")) {
       document.title = "Webprogramming (LIX018P05) - Index";
    }

    if (document.URL.includes("second.html")) {
       document.title = "Webprogramming (LIX018P05) - Second";
    }

    // ASSIGNMENT 2

    if (document.URL.includes("index.html")) {
       let heading = document.createElement("h1");
       let text = document.createTextNode("This is a paragraph");
       heading.appendChild(text);

       let para = document.createElement("p");
       let text1 = document.createTextNode("Lorem ipsum bla bla bla bla bla ties 123");
       para.appendChild(text1);

       let article = document.createElement("article");
       article.appendChild(heading);
       article.appendChild(para);

       let body = document.getElementsByClassName("col-md-12").item(0);
       body.appendChild(article);
    }

    // ASSIGNMENT 3 & 4
    let link = document.getElementsByTagName("a").item(7);
    link.setAttribute('href', 'https://google.com');
    link.setAttribute('target', '_blank');

    // ASSIGNMENT 5
    let nav = document.getElementsByClassName('nav-item');

    for (var i = 0; i < nav.length; i++) {
       nav[i].childNodes[1].style.color = 'red';
    }

    // ASSIGNMENT 6
  //  if (document.URL.includes('second.html')) {
  //     let para = document.createElement("p")
  //     var arr = {
  //        week1: "assignment1";
  //        week2 : "assignment1";
  //        week3 : "assignment2";
  //        week4 : "assignment2";
  //        week5 : "assignment3";
  //        week6 : "assignment3";
  //        week7 : "Final Project";
  //     }

  //     for (var i = 0; i < arr.length; i++) {
  //        para.write(check.item(i))
  //     }
  //     let body = document.getElementsByClassName("col-md-12").item(0);
  //     body.appendChild(para)

   // }


    // ASSIGNMENT 7
    if (document.URL.includes('second.html')) {
       let sidebar = document.getElementsByClassName("col-md-12").item(0);
       sidebar.className = 'col-md-8';

       let div = document.createElement('div');
       div.className = 'col-md-4';

       let heading = document.createElement('h1');
       let text = document.createTextNode('Sidebar');
       heading.appendChild(text);

       div.appendChild(heading);
       sidebar.parentNode.appendChild(div);

       console.log(sidebar);
    }


}




