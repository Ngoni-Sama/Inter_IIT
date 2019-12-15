var dummyResults = [
	{
		id: 1,
		name: 'Sinarest',
		price: '50',
		company: 'Alpha Pharmaceuticals',
		mfg: '08/12/19',
		exp: '08/12/20'
	},
	{
		id: 2,
		name: 'Crocin',
		price: '20',
		company: 'Alpha Pharmaceuticals',
		mfg: '08/12/19',
		exp: '08/12/20'
	}
];

// var xmlhttp = new XMLHttpRequest();
// xmlhttp.onreadystatechange = 
let cart = JSON.parse(localStorage.getItem('cart')) || {};

const listItemElement = document
	.querySelector('#medicine-template')
	.content.querySelector('.collection-item');
const listElement = document.querySelector('#medicine-list');

function displayResults(results) {
	while (listElement.hasChildNodes()) {  
		listElement.removeChild(listElement.firstChild);
	}
	results.forEach(result => {
		let newListElement = document.importNode(listItemElement, true);

		newListElement.querySelector('.medicine-name').textContent = result.name;
		newListElement.querySelector('.price').textContent = `₹ ${result.price}`;
		newListElement.querySelector('.company').textContent = result.company;
		newListElement.querySelector('.mfg').textContent = `Mfg: ${result.mfg}`;
		newListElement.querySelector('.exp').textContent = `Exp: ${result.exp}`;

		newListElement.querySelector('.add-btn').addEventListener('click', () => {
			let quantity = newListElement.querySelector('.quantity-input').value;
			cart[result.name] = { ...result, quantity: quantity };
			console.log(cart);

			localStorage.setItem('cart', JSON.stringify(cart));
			M.toast({ html: `${quantity} ${result.name} added to cart` });
		});

		listElement.appendChild(newListElement);
	});
}


function showsuggestions(){
	var str = document.getElementById("search").value;
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			dummyResults = JSON.parse(this.responseText);
		}
	};
	xmlhttp.open("GET", "filter.php?q="+ str , false);
	xmlhttp.send();
	console.log(dummyResults);
	displayResults(dummyResults);
}
showsuggestions();