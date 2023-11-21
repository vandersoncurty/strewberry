function addMember() {
  var container = document.createElement("div");
  container.classList.add("member-container");

  container.innerHTML = 
    `
    <label for="email">E-mail:</label>
    <input type="email" name="email" required>
    
    <label>Função:</label>
    <label><input type="checkbox" name="permissions[${getNextMemberIndex()}]">Jurado</label>
    <label><input type="checkbox" name="permissions[${getNextMemberIndex()}]">DJ/MC</label>

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