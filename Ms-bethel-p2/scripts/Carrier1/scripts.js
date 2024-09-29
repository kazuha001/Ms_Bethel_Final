

function anime1() {

    var carrier1Id = document.getElementById("carrier1")

    var b1Id = document.getElementById("b1")

    var b2Id = document.getElementById("b2")

    var b3Id = document.getElementById("b3")

    var b4Id = document.getElementById("b4")

    var animeId = document.getElementById("anime")

    var content1Id = document.getElementById("content1")

    var content2Id = document.getElementById("content2")

    var content3Id = document.getElementById("content3")

    var c2_tId = document.getElementById("c2_t")

    carrier1Id.style.transform = "scale(25.0)"

    setTimeout(() => {

        carrier1Id.style.opacity = "0"

        //box b1
        b1Id.style.right = "120px"

        b1Id.style.top = "50px"

        //box b2
        b2Id.style.left = "50px"

        b2Id.style.top = "70px"

        //box b3
        b3Id.style.left = "110px"

        b3Id.style.bottom = "140px"

        //box b4
        b4Id.style.right = "440px"

        b4Id.style.bottom = "50px"

        //anime
        animeId.style.bottom = "0"

        c2_tId.style.opacity = "1"

    }, 1000)

    setTimeout(() => {

        content1Id.style.opacity = "1"

        content1Id.style.transform = "translateX(0)"

        setTimeout(() => {

            content2Id.style.opacity = "1"

            content2Id.style.transform = "translateX(0)"

            setTimeout(() => {

                content3Id.style.opacity = "1"

                content3Id.style.transform = "translateX(0)"

            }, 500)

        }, 500)
        
    }, 1200)

    setTimeout(() => {

        carrier1Id.style.display = "none"

    }, 2100)

}