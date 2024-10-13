document.getElementById("submit").addEventListener("submit", function(event){
    event.preventDefault()

    const formData = new FormData(this)

        fetch("updateS2.php", {
            method: 'POST',
            body: formData
        })

        alert("Sucessfully Updated!!!")
        
        window.location.href = "retrieve2.php"
        
            

})
