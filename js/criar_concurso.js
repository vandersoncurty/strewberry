function addMember() {
  var container = document.createElement("div");
  container.classList.add("member-container");

  container.innerHTML = 
    `
    <table>
      <tr>
        <label for="email">E-mail:</label>
        <input type="email" name="emails" required>
      </tr>
      <tr>
        <td>
          <p>Função:</p>
        </td>
        <td>
          <label><input type="radio" name="permissions[${getNextMemberIndex()}]" value="jurado">Jurado</label>
        </td>
        <td>
          <label><input type="radio" name="permissions[${getNextMemberIndex()}]" value="djmc">DJ/MC</label>
        </td>
      </tr>
      <tr>
        <button type="button" onclick="removeMember(this)">Remover</button>
      </tr>
    </table>
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