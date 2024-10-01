function cate() {

    var categories = document.getElementById("categories").value

    var cate1Id = document.getElementById("cate1")

    var cate2Id = document.getElementById("cate2")

    var cate3Id = document.getElementById("cate3")

    cate1Id.style.display = "none"

    cate2Id.style.display = "none"

    cate3Id.style.display = "none"

    if (categories === "Executive and Management Level") {
        cate1Id.style.display = "flex"
    }else if (categories === "Operational Level") {
        cate2Id.style.display = "flex"
    }else if (categories === "Support Roles") {
        cate3Id.style.display = "flex"
    }

}

function back() {

    window.location.href = "index.html"

}

document.getElementById("submit").addEventListener("submit", function(event){
    event.preventDefault()

    const formData = new FormData(this)

    var categoriesId = document.getElementById("categories").value

    if (categoriesId === "Executive and Management Level") {

        fetch("php/submit.php", {
            method: 'POST',
            body: formData
        })

        window.location.reload()

        alert("Sucessfully Submited")

    }else if (categoriesId === "Operational Level") {

        fetch("php/submit2.php", {
            method: 'POST',
            body: formData
        })

        window.location.reload()

        alert("Sucessfully Submited")

    }else if (categoriesId === "Support Roles") {

        fetch("php/submit3.php", {
            method: 'POST',
            body: formData
        })

        window.location.reload()

        alert("Sucessfully Submited")

    }else {

        alert("Invalid")

    }

  

})

function change() {

    var hoursId = document.getElementById("hours")

    var daysId = document.getElementById("days")

    var weeksId = document.getElementById("weeks")

    var monthsId = document.getElementById("months")


    var position1Id = document.getElementById("position1").value

    var position2Id = document.getElementById("position2").value

    var position3Id = document.getElementById("position3").value

    if (position1Id === "Call Center Director") {

        hoursId.value = "150"

        daysId.value = "1200"

        weeksId.value = "7,200"

        monthsId.value = "31,200"

    }else if (position1Id === "Call Center Manager") {

        hoursId.value = "137.5"

        daysId.value = "1100"

        weeksId.value = "6,600"

        monthsId.value = "28,600"

    }else if (position1Id === "Team Leader / Supervisor") {

        hoursId.value = "131.2"

        daysId.value = "1050"

        weeksId.value = "6,300"

        monthsId.value = "27,300"

    } else if (position2Id === "Senior Call Center Representative") {

        hoursId.value = "87.5"

        daysId.value = "700"

        weeksId.value = "4,200"

        monthsId.value = "18,200"

    } else if (position2Id === "Call Center Representative / Agent") {

        hoursId.value = "75"

        daysId.value = "600"

        weeksId.value = "3,600"

        monthsId.value = "15,600"

    }else if (position2Id === "Call Center Trainee") {

        hoursId.value = "60"

        daysId.value = "480"

        weeksId.value = "2,880"

        monthsId.value = "12,480"

    }else if (position3Id === "Quality Assurance (QA) Specialist") {

        hoursId.value = "70"

        daysId.value = "560"

        weeksId.value = "3,360"

        monthsId.value = "14,560"

    }else if (position3Id === "Workforce Management (WFM) Analyst") {

        hoursId.value = "72.5"

        daysId.value = "580"

        weeksId.value = "3,480"

        monthsId.value = "15,080"

    }else {

        hoursId.value = "0"

        daysId.value = "0"

        weeksId.value = "0"

        monthsId.value = "0"

    }

}
