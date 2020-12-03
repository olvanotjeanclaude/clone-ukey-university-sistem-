<template>
    <div class="container my-3 d-none">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Dersler</h5>
                    </div>
                    <div class="card-body">
                        <ul
                            class="list-unstyled text-uppercase"
                            v-for="(lesson, index) in lessons"
                            :key="index"
                        >
                            <li>
                                <a href="/" class="text-white"
                                    >{{ lesson.code }}-{{ lesson }}</a
                                >
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <p>Daha fazla...</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 mt-4 m-lg-0">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Meeeting</h5>
                            </div>
                            <div class="card-body">
                                <p>You do not have an ongoing meeting.</p>
                            </div>
                            <div class="card-footer">
                                <p>More...</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="row d-flex justify-content-start align-items-center mt-3"
                >
                    <div class="col-4">
                        <div class="opportunity agenda">
                            <img
                                src="https://ukey.uludag.edu.tr/Images/takvimlogo.png"
                                alt="takvım logo"
                            />
                            <span>Agenda</span>
                        </div>
                    </div>

                    <div class="col-4 ml-3">
                        <div
                            class="opportunity erasmus bg-warning ml-2 ml-lg-0"
                        >
                            <img
                                src="https://ukey.uludag.edu.tr/images/erasmuslogo.png"
                                alt="erasmus logo"
                            />
                            <span>Erasmus</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            lessons: [
                "BIL0003 - EĞİTİMDE YAPAY ZEKA UYGULAMALARI",
                "BİLİŞİM SİSTEMLERİ DONANIMI",
                "TEMEL PROGRAMLAMA",
                "EĞİTİMDE GRAFİK VE CANLANDIRMA",
                "ÖĞRETİM TASARIMI",
                "WEB TABANLI PROGRAMLAMA",
                "KARİYER PLANLAMA VE GELİŞTİRME",
                " ELEŞTİREL VE ANALİTİK DÜŞÜNME",
                "ÖĞRETİM İLKE VE YÖNTEMLERİ"
            ],
            lessonss: []
        };
    },
    created() {
        console.log(this.lessonss);
        axios
            .get("/api/lesson")
            .then(response => {
                this.lessonss = response.data;
                console.log(this.lessonss);
            })
            .catch(e => this.errors.push(e));
    }
};
</script>

<style scoped>
.card {
    background: #00c0ef;
    line-height: 5px;
    color: #fff;
    font-size: 14px;
}
.card:hover,
.opportunity:hover {
    box-shadow: 2px 2px 3px gray, -2px -2px 3px gray !important;
}
.card p {
    font-size: 15px;
}
.card-header {
    border-bottom: none;
    text-transform: capitalize;
    padding: 2px 1em !important;
}

.card-footer {
    background: #00c0ef;
    text-align: center;
    padding: 0;
}
.card-footer p {
    margin: 3px auto;
    padding: 7px;
}

.opportunity {
    height: 8em;
    width: 10em;
    color: #fff;
    text-align: center;
    border-radius: 5px;
}
img {
    margin-top: 1.5em !important;
}
.agenda {
    background: purple;
}
</style>
