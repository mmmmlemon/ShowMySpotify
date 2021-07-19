//Logo
<template>
<div class="logoDiv fadeInAnimSlow">
    <div class="avatarBase" :style="logoBaseAnim">
        &nbsp;
       <div class="avatarHead">
           &nbsp;
           <h6 ><b class="avatarBuba">:^)</b></h6>
       </div>
       <div class="avatarBody">
           &nbsp;
       </div>
    </div>
</div>

</template>
<script>
export default {
   props: {
       animation: {type: Boolean, default: true},
   },


//    computed: {
//         logoBaseAnim: function(){
//             if(this.animation == true){
//                 return `animation: logoBaseAnim 2.5s ease-in-out;`;
//             }
//             else
//             { return ``; }
//         },
//         logoGraphOneAnim: function(){
//            if(this.animation == true){
//                return `animation: logoGraphOneAnim 2.5s ease-in-out;`;
//            }
//            else
//            { return ``; }
//        },
//         logoGraphTwoAnim: function(){
//            if(this.animation == true){
//                return `animation: logoGraphTwoAnim 2.6s ease-in-out;;`;
//            }
//            else
//            { return ``; }
//        },
//         logoGraphThreeAnim: function(){
//            if(this.animation == true){
//                return `animation: logoGraphThreeAnim 2.7s ease-in-out;`;
//            }
//            else
//            { return ``; }
//        },
//    }
}
</script>