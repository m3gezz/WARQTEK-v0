const document_types= document.querySelectorAll(".document-type");
document_types.forEach((document_type) => {
  document_type.addEventListener("click", () => {

    document_types.forEach((a) => {
      if (a.style.color == "var(--button)") {
        a.style.color = "var(--navbar)";
        a.style.backgroundColor = "var(--button)";
      }
    })

    document_type.style.backgroundColor = "var(--navbar)";
    document_type.style.color = "var(--button)";
    document_type.style.border = "2px solid var(--button)";

    document.querySelectorAll(".the-request").forEach((request) => {
      request.innerHTML = document_type.innerHTML;
    })
    
  })
})

const document_deliver_types= document.querySelectorAll(".document-deliver");
document_deliver_types.forEach((document_deliver_type) => {
  document_deliver_type.addEventListener("click", () => {

    document_deliver_types.forEach((a) => {
      if (a.style.color == "var(--button)") {
        a.style.color = "var(--navbar)";
        a.style.backgroundColor = "var(--button)";
      }
    })

    document_deliver_type.style.backgroundColor = "var(--navbar)";
    document_deliver_type.style.color = "var(--button)";
    document_deliver_type.style.border = "2px solid var(--button)";

  })
})