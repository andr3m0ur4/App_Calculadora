// carregar eventos na página
window.onload = function() {
	let total = location.search.replace('?', '')
	document.getElementById('resultado').value = total
}