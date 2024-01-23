
const trustpilotListcontents = [
    {
        image:'https://internal.mobrog.com/assets/trustpilot-widget/img/4stars.webp',
        title:'Hace dos años hago encuestas ,y me…',
        text:'Hace dos años hago encuestas ,y me encanta !',
        name:'<b>Aly</b>',
        invited:'<p style="display: flex;align-items: center;"><i class="fa-sharp fa-solid fa-circle-check" style="font-size: 14px;align-content: center;"></i> Invited</p>'
    },
    {
        image:'https://internal.mobrog.com/assets/trustpilot-widget/img/5stars.webp',
        title:'Mobrog',
        text:'Interesting surveys quick payouts',
        name:'<b>A Robinson</b>',
        invited:'<p style="display: flex;align-items: center;"><i class="fa-sharp fa-solid fa-circle-check" style="font-size: 14px;align-content: center;"></i> Invited</p>'

    },
    {
        image:'https://internal.mobrog.com/assets/trustpilot-widget/img/5stars.webp',
        title:'A nice experience at mobrog',
        text:"I just got received my reward for answering surveys! At first, it's hard to qualify to some surveys because I get easily getting screened out. But overall, surveys are enjoyable and interface is nice because everyone can easily understand the instructions and way of answering the questions. I will definitely refer it to my friends. Thank you, mobrog!",
        name:'<b>Angge</b>',
        invited:'<p style="display: flex;align-items: center;"><i class="fa-sharp fa-solid fa-circle-check" style="font-size: 14px;align-content: center;"></i> Invited</p>'

    },
    {
        image:'https://internal.mobrog.com/assets/trustpilot-widget/img/5stars.webp',
        title:'Absolut zu empfehlen',
        text:'Absolut zu empfehlen, seriös und bezahlt auch wirklich :)',
        name:'<b>Jess Brod</b>',
        invited:'<p style="display: flex;align-items: center;"><i class="fa-sharp fa-solid fa-circle-check" style="font-size: 14px;align-content: center;"></i> Invited</p>'
    },
    {
        image:'https://internal.mobrog.com/assets/trustpilot-widget/img/5stars.webp',
        title:'Es la primera vez que incursiono en la…',
        text:'Es la primera vez que incursiono en la experiencia de contestar encuestas, y afortunadamente he encontrado en udes, una empresa seria y que cumple con lo que promete, voy a seguir estando para cualquier encuesta a la que ustedes me convoquen, desde ya, muchas gracias por tenerme en cuenta!',
        name:'<b>Pupi</b>',
        invited:'<p style="display: flex;align-items: center;"><i class="fa-sharp fa-solid fa-circle-check" style="font-size: 14px;align-content: center;"></i> Invited</p>'
    }
    ,
    {
        image:'https://internal.mobrog.com/assets/trustpilot-widget/img/5stars.webp',
        title:'Mobrog is trustworthy',
        text:'Mobrog is trustworthy. It provides genuine surveys and helps products to be surveyed in a right direction for there upgradation and improvisation.',
        name:'<b>Navinkumar</b>',
        invited:'<p style="display: flex;align-items: center;"><i class="fa-sharp fa-solid fa-circle-check" style="font-size: 14px;align-content: center;"></i> Invited</p>'

    }
    ,
    {
        image:'https://internal.mobrog.com/assets/trustpilot-widget/img/4stars.webp',
        title:'bien',
        text:"paiement Paypal de 5 € demandé, reçu immédiatement.bon site ; dommage qu'il n'y ait pas assez de sondages qui me correspondent",
        name:'<b>Catherine HUBERT</b>',
        invited:''

    }



] 

const mobrog_v1_trustpilot_sub_containers = document.querySelector(".mobrog-v1-trustpilot-sub-containers");
const mobrog_v1_trustpilot_prev = document.getElementById("check_more_left");
const mobrog_v1_trustpilot_next = document.getElementById("check_more_right");
const buttonRight = document.getElementById('slideRight');
const buttonLeft = document.getElementById('slideLeft');


if(mobrog_v1_trustpilot_sub_containers != null){
    for (var i = 0; i < trustpilotListcontents.length; i++) {
        mobrog_v1_trustpilot_sub_containers.innerHTML += `
        <div class="mobrog-v1-trustpilot-sub-container" id="${trustpilotListcontents[i].id}">
            <div style="display:flex;">
                <img src="${trustpilotListcontents[i].image}" alt="">
                ${trustpilotListcontents[i].invited}
            </div>
            <h2>${ trustpilotListcontents[i].title}</h2>
            <p>${ trustpilotListcontents[i].text}</p>
            <p>${ trustpilotListcontents[i].name}</p>
        </div>`
    
    }
    
    buttonRight.onclick = function () {
        document.querySelector('.mobrog-v1-trustpilot-sub-containers').scrollLeft += 268;
    };
    buttonLeft.onclick = function () {
        document.querySelector('.mobrog-v1-trustpilot-sub-containers').scrollLeft -= 268;
    };
      
}











