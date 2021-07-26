//RecentTracks
// Последние прослушанные треки
<template>
    <div class="row justify-content-center">
        <div class="col-12 fadeInAnimSlow" v-if="recentTracks != -1 && recentTracks != false">
            <!-- заголовок -->
            <h4 class="text-center">
                <b>Последние прослушанные треки</b>&nbsp;
                <i class="fas fa-compact-disc primaryColor"></i>
            </h4>
            <!-- вывод списка треков -->
            <div class="row justify-content-center">
                <div class="col-9">
                    <List :items="recentTracks"/>
                </div>
            </div>
        </div>
        <div v-else-if="recentTracks == 'noTracks'">
            <Info infoMessage="Не удалось загрузить последние треки. Возможно вы ничего не слушали в последнее время?"/>
        </div>
 
    </div>
 
</template>
<script>
export default {

    created(){
        this.checkToken ().then(response => {
            if(response === 'refresh'){
                var url = window.location.href;
                var indexOfAnchor = url.indexOf('#');
                if(indexOfAnchor != -1)
                {var url = url.slice(0, indexOfAnchor);}
                axios.get('/refresh_token').then(response => {
                    if(response.data = true){
                        window.location.replace(url);
                    }
                })

            } else {         
                
                //настройки навигации
                if(this.navSettings == -1)
                { this.$store.dispatch('getNavSettings'); }

                //загружаем последние треки
                if(this.recentTracks == -1)
                { this.$store.dispatch('getLatestTracks'); }
            }
        });

    },

    computed: {
        //настройки навигации
        navSettings: function(){
            return this.$store.state.homePage.navSettings;
        },
        
        //последние треки
        recentTracks: function(){
            return this.$store.state.homePage.recentTracks;
        }
    }
}
</script>