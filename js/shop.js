const dummyResults = [
	{
		name: 'Sinarest',
		price: '50',
		company: 'Alpha Pharmaceuticals',
		mfg: '08/12/19',
		exp: '08/12/20'
	},
	{
		name: 'Sinarest',
		price: '50',
		company: 'Alpha Pharmaceuticals',
		mfg: '08/12/19',
		exp: '08/12/20'
	}
];

const listItemElement = document
	.querySelector('#medicine-template')
	.content.querySelector('.collection-item');
const listElement = document.querySelector('#medicine-list');

function displayResults(results) {
	let newListElement;
	results.forEach(result => {
		newListElement = document.importNode(listItemElement, true);

		newListElement.querySelector('.medicine-name').textContent = result.name;
		newListElement.querySelector('.price').textContent = `₹ ${result.price}`;
		newListElement.querySelector('.company').textContent = result.company;
		newListElement.querySelector('.mfg').textContent = `Mfg: ${result.mfg}`;
		newListElement.querySelector('.exp').textContent = `Exp: ${result.exp}`;

		listElement.appendChild(newListElement);
	});
}

displayResults(dummyResults);
