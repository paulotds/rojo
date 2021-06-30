const flightPath = {
    // values:[
    //     {x:0, y:500},
    //     {x:300}
    // ]
};

const tlFirstScroll = new TimelineMax();

var tela = window.screen.width;


console.log(tela)   

// 1366px && iPad Pro Landscape 1366px

if(tela > 1366 && tela <= 1920){
    console.log('1366px && iPad Pro Landscape 1366px');
    tlFirstScroll
    .set('.scroll-magic',{height:"75vh", width:"75vh", transformOrigin:"center"})
    .to('.scroll-magic', 2, {y:"20"})
    .to('.scroll-magic1, .scroll-magic2', 3, {margin:"0 -5%"})
    .to('.scroll-magic', 4, {y:"40"})
    .to('.scroll-magic1, .scroll-magic2', 5, {margin:"0 -10%"})
    .to('.scroll-magic', 6, {y:"60"})
    .to('.scroll-magic1, .scroll-magic2', 7, {margin:"0 -20%"})
    .to('.scroll-magic', 8, {y:"80"})
    .to('.scroll-magic1, .scroll-magic2', 9, {margin:"0 -40%"})
    .to('.scroll-magic', 10, {height:"65vh", width:"65vh", y:"80",x:"10"})
    .to('.scroll-magic', 11, {height:"60vh", width:"60vh", y:"80",x:"30"})
    .to('.scroll-magic', 12, {height:"55vh", width:"55vh", y:"80",x:"50"})
    .to('.scroll-magic', 13, {height:"50vh", width:"50vh", y:"80",x:"70"})
    .to('.scroll-magic', 14, {height:"45vh", width:"45vh", y:"90", x:"150"})
    .to('.scroll-magic', 15, {height:"40vh", width:"40vh", y:"100", x:"250"})
    .to('.scroll-magic', 16, {height:"35vh", width:"35vh", y:"110", x:"350"})
    .to('.banner2', 17, {opacity:0.8})
    .to('.scroll-magic', 18, {height:"30vh", width:"30vh",y:"110", x:"400", filter: "brightness(0) invert(1)"})
    .to('.banner2', 19, {opacity:1})

}

else if(tela >= 1024 && tela <= 1366){
    console.log('1366px && iPad Pro Landscape 1366px');
    tlFirstScroll
    .set('.scroll-magic',{height:"70vh", width:"70vh", transformOrigin:"center"})
    .to('.scroll-magic', 2, {y:"20"})
    .to('.scroll-magic1, .scroll-magic2', 3, {margin:"0 -5%"})
    .to('.scroll-magic', 4, {y:"40"})
    .to('.scroll-magic1, .scroll-magic2', 5, {margin:"0 -10%"})
    .to('.scroll-magic', 6, {y:"60"})
    .to('.scroll-magic1, .scroll-magic2', 7, {margin:"0 -20%"})
    .to('.scroll-magic', 8, {y:"80"})
    .to('.scroll-magic1, .scroll-magic2', 9, {margin:"0 -40%"})
    .to('.scroll-magic', 10, {height:"65vh", width:"65vh", y:"80",x:"10"})
    .to('.scroll-magic', 11, {height:"60vh", width:"60vh", y:"80",x:"30"})
    .to('.scroll-magic', 12, {height:"55vh", width:"55vh", y:"80",x:"50"})
    .to('.scroll-magic', 13, {height:"50vh", width:"50vh", y:"80",x:"70"})
    .to('.scroll-magic', 14, {height:"45vh", width:"45vh", y:"90", x:"150"})
    .to('.scroll-magic', 15, {height:"40vh", width:"40vh", y:"100", x:"250"})
    .to('.scroll-magic', 16, {height:"35vh", width:"35vh", y:"110", x:"350"})
    .to('.banner2', 17, {opacity:0.8})
    .to('.scroll-magic', 18, {height:"30vh", width:"30vh",y:"110", x:"400", filter: "brightness(0) invert(1)"})
    .to('.banner2', 19, {opacity:1})

}

// iPad Pro Retrato 1024px && iPad Landscape 1024px && iPhone Max Landscape 812px (1024px)

else if(tela >= 768 && tela <= 1023){
    console.log('iPad Pro Retrato 1024px && iPad Landscape 1024px && iPhone Max Landscape 812px (1024px)');
    tlFirstScroll
    .set('.scroll-magic',{height:"40vh, width:40vh"})
    .to('.scroll-magic1', 2, {left:"-50%"})
    .to('.scroll-magic2', 3, {right:"-50%"})
    .to('.scroll-magic1', 4, {left:"-100%"})
    .to('.scroll-magic2', 5, {right:"-100%"})
    .to('.scroll-magic', 6, {height:"35vh", width:"35vh", y:"100", x:"70"})
    .to('.scroll-magic', 7, {height:"30vh", width:"30vh", y:"120", x:"90"})
    .to('.scroll-magic', 8, {height:"25vh", width:"25vh", y:"170", x:"110"})
    .to('.scroll-magic', 9, {height:"20vh", width:"20vh", y:"200", x:"130"})
    .to('.banner2', 10, {opacity:0.8})
    .to('.scroll-magic', 11, {height:"10vh", width:"10vh",y:"400", x:"150", filter: "brightness(0) invert(1)"})
    .to('.banner2', 12, {opacity:1})

}

// 1920px

// iPad Retrato 768px



// iPhone Max Retrato 600px
else if(tela <= 600){
    console.log('iPad Pro Retrato 1024px && iPad Landscape 1024px && iPhone Max Landscape 812px (1024px)');
    tlFirstScroll
    .set('.scroll-magic',{height:"20vh, width:20vh"})
    .to('.scroll-magic1', 2, {left:"-50%"})
    .to('.scroll-magic2', 3, {right:"-50%"})
    .to('.scroll-magic1', 4, {left:"-100%"})
    .to('.scroll-magic2', 5, {right:"-100%"})
    .to('.scroll-magic', 6, {height:"25vh", width:"25vh", y:"80", x:""})
    .to('.scroll-magic', 7, {height:"20vh", width:"20vh", y:"110", x:""})
    .to('.scroll-magic', 8, {height:"20vh", width:"20vh", y:"150", x:""})
    .to('.scroll-magic', 9, {height:"15vh", width:"15vh", y:"180", x:"50"})
    .to('.banner2', 10, {opacity:0.8})
    .to('.scroll-magic', 11, {height:"10vh", width:"10vh",y:"210", x:"50", filter: "brightness(0) invert(1)"})
    .to('.banner2', 12, {opacity:1})

}else{
    console.log('1366px && iPad Pro Landscape 1366px');
    tlFirstScroll
    .set('.scroll-magic',{height:"70vh", width:"70vh", transformOrigin:"center"})
    .to('.scroll-magic', 2, {y:"20"})
    .to('.scroll-magic1, .scroll-magic2', 3, {margin:"0 -5%"})
    .to('.scroll-magic', 4, {y:"40"})
    .to('.scroll-magic1, .scroll-magic2', 5, {margin:"0 -10%"})
    .to('.scroll-magic', 6, {y:"60"})
    .to('.scroll-magic1, .scroll-magic2', 7, {margin:"0 -20%"})
    .to('.scroll-magic', 8, {y:"80"})
    .to('.scroll-magic1, .scroll-magic2', 9, {margin:"0 -40%"})
    .to('.scroll-magic', 10, {height:"65vh", width:"65vh", y:"80",x:"10"})
    .to('.scroll-magic', 11, {height:"60vh", width:"60vh", y:"80",x:"30"})
    .to('.scroll-magic', 12, {height:"55vh", width:"55vh", y:"80",x:"50"})
    .to('.scroll-magic', 13, {height:"50vh", width:"50vh", y:"80",x:"70"})
    .to('.scroll-magic', 14, {height:"45vh", width:"45vh", y:"90", x:"150"})
    .to('.scroll-magic', 15, {height:"40vh", width:"40vh", y:"100", x:"250"})
    .to('.scroll-magic', 16, {height:"35vh", width:"35vh", y:"110", x:"350"})
    .to('.banner2', 17, {opacity:0.8})
    .to('.scroll-magic', 18, {height:"30vh", width:"30vh",y:"110", x:"400", filter: "brightness(0) invert(1)"})
    .to('.banner2', 19, {opacity:1})
}



// iPhone 5 Retrato 600px

// iPhone 5 Landscape 768px




const tween = new TimelineLite();

tween.add(
    TweenLite.to(".scroll-magic", 1,{
        bezier: flightPath,
        ease: "elastic(2.5, 1)"
    })

);

const timeline = new TimelineMax();
timeline
    .add(tween)
    .add(tlFirstScroll);
 
const controller = new ScrollMagic.Controller();

const scene = new ScrollMagic.Scene({
    triggerElement:'#A',
    duration:1000,
    triggerHook:0
})
.setTween(timeline)

.setPin("#A")
.addTo(controller);


