let kids = ['ihsan', 'melih', 'orhan', 'mete'];

let list = document.querySelector('#kids');

// for(let i=0; i<kids.length; i++){
//   const listItem = document.createElement('li');
//   listItem.innerHTML = kids[i];
//   list.appendChild(listItem);
// }

kids.forEach(kid => {
  const listItem = document.createElement('li');
  listItem.innerHTML = kid;
  list.appendChild(listItem);
});