document.getElementById("submit").addEventListener("submit", function(event){
    event.preventDefault()

    const formData = new FormData(this)

        fetch("updateS1.php", {
            method: 'POST',
            body: formData
        })

        alert("Sucessfully Updated!!!")
        
        window.location.href = "retrieve1.php"
        
            

})
