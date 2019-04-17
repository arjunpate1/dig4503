const key = "923b8e9de1c24266a13f2430884ba723"
const url = `https://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=${key}`

const recievedNews = (newsdata) => {
    const articlesDiv = document.querySelector("#news")
    newsdata.articles.forEach((article) => {

			//Here we create and add html elements to our html file
      const div = document.createElement("div")
      div.className = "news"
      div.innerHTML = `
			<h2>${article.title}</h2>
			<img src="${article.urlToImage}"/><br>
       <a href="${article.url}">Read more</a> `
      articlesDiv.appendChild(div)

    })
}

//Fetch sends a request to the API.
//Promise makes it possible to run this in the background. När vi får APIet då går den vidare och skickar tillbaka JSON.
fetch(url)
  .then(response => response.json())
  .then(recievedNews)





/*


var url = 'https://newsapi.org/v2/top-headlines?' +
  'country=us&' +
  'apiKey=923b8e9de1c24266a13f2430884ba723';
var req = new Request(url);
fetch(req)
  .then(function(response) {
    console.log(response.json());

  })
$('#news').html(response.json());

*/
