


const cafeList = document.querySelector('#cafe-list');
const form = document.querySelector('#add-cafe-form');

// function renderCafe(doc){
// 	let li = document.createElement('li');
// 	let name = document.createElement('span');
// 	let city = document.createElement('span');

// 	li.setAttribute('data-id', doc.id);
// 	name.textContent = doc.data().name;
// 	city.textContent = doc.data().city;

// 	// li.appendChild(name);
// 	// li.appendChild(city);
// 	cafeList.appendChild(name);

// 	// cafeList.appendChild(li);
  	
// }


db.collection('cafes').get().then((snapshot) =>{
  		snapshot.docs.forEach(doc =>{
  			// renderCafe(doc);
  			// lst.push(doc.data().name);
  			var names = document.createElement('P');
  			var emails = document.createElement('P');
  			var phones = document.createElement('P');
  			names.innerHTML="Name: "+doc.data().name+'<br>';
  			emails.innerHTML="Email: "+doc.data().email+'<br>';
  			phones.innerHTML="Phone Number: "+doc.data().phone+'<br>'+'<hr>';
  			document.getElementById('d').appendChild(names);
  			document.getElementById('d').appendChild(emails);
  			document.getElementById('d').appendChild(phones);
  		})
  		// for (var i=0; i<lst.length; i++){
  			

  		// }
  		// document.getElementById('name').innerHTML = lst;
  	});



form.addEventListener('submit', (e)=>{
  	e.preventDefault();
  	db.collection('cafes').add({
  		name: form.name.value,
  		email: form.email.value,
  		phone: form.phone.value
  	});
  	form.name.value = '';
  	form.email.value = '';
  	form.phone.value = '';

})