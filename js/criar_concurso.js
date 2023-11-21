function addMember() {
  var container = document.createElement("div");
  container.classList.add("member-container");

  container.innerHTML = 
    `
    <label for="email">E-mail:</label>
    <input type="email" name="emails" required>
    
    <label>Função:</label>
    <label><input type="radio" name="permissions[${getNextMemberIndex()}]" value="jurado">Jurado</label>
    <label><input type="radio" name="permissions[${getNextMemberIndex()}]" value="djmc">DJ/MC</label>

    <button type="button" onclick="removeMember(this)">Remover</button>
    `;

  document.getElementById("staff_container").appendChild(container);
}

function removeMember(button) {
  var container = button.parentElement;
  container.parentElement.removeChild(container);
}

function getNextMemberIndex() {
  var containers = document.querySelectorAll(".member-container");
  return containers.length;
}