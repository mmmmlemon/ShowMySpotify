//Avatar
// стандартный аватар для пользователей у которых его нет
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
}
</script>