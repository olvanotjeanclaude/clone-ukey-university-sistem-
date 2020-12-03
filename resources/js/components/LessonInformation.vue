<template>
    <div class="card information my-4 mx-3 rounded">
        <h5 class="card-header text-muted text-capitalize">
            Basic Information of the Course.
        </h5>

        <div class="information-item">
            <div class="field-display">
                <div class="field-display-title px-3">
                    <span>Course name</span>
                </div>
                <div class="field-display-value">
                    <p class=" my-auto">BİLİŞİM SİSTEMLERİ DONANIMI</p>
                </div>
            </div>
        </div>
        <div class="information-item">
            <div class="field-display">
                <div class="field-display-title px-3">
                    <span>Course code</span>
                </div>
                <div class="field-display-value">
                    <p class=" my-auto">{{ 4 }}</p>
                </div>
            </div>
        </div>
        <div class="information-item">
            <div class="field-display">
                <div class="field-display-title px-3">
                    <span>Ects</span>
                </div>
                <div class="field-display-value">
                    <p class=" my-auto">{{ 4 }}</p>
                </div>
            </div>
        </div>
        <div class="information-item">
            <div class="field-display">
                <div class="field-display-title px-3">
                    <span>Akts</span>
                </div>
                <div class="field-display-value">
                    <p class=" my-auto">{{ 4 }}</p>
                </div>
            </div>
        </div>
        <div class="information-item">
            <div class="field-display">
                <div class="field-display-title px-3">
                    <span>Theory</span>
                </div>
                <div class="field-display-value">
                    <p class=" my-auto">{{ 5 }}</p>
                </div>
            </div>
        </div>
        <div class="information-item">
            <div class="field-display">
                <div class="field-display-title px-3">
                    <span>Application</span>
                </div>
                <div class="field-display-value">
                    <p class=" my-auto">{{ 4 }}</p>
                </div>
            </div>
        </div>
        <div class="information-item">
            <div class="field-display">
                <div class="field-display-title px-3">
                    <span>Lab</span>
                </div>
                <div class="field-display-value">
                    <p class=" my-auto">{{ 3 }}</p>
                </div>
            </div>
        </div>
        <div class="information-item">
            <div class="field-display">
                <div class="field-display-title px-3">
                    <span>Credit</span>
                </div>
                <div class="field-display-value">
                    <p class=" my-auto">4</p>
                </div>
            </div>
        </div>
        <div class="information-item">
            <div class="field-display">
                <div class="field-display-title px-3">
                    <span>purpose </span>
                </div>
                <div class="field-display-value">
                    <p class="m-auto">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Obcaecati exercitationem a veritatis minima. Minus
                        molestiae corrupti dolorum! Officiis velit fugit
                        cupiditate eos culpa dolore blanditiis nisi, tenetur
                        illum rerum? Quia.
                    </p>
                </div>
            </div>
        </div>
        <div class="information-item">
            <div class="field-display">
                <div class="field-display-title px-3">
                    <span>Course Resources</span>
                </div>
                <div class="field-display-value">
                    <p class="my-auto">
                        - Pala, Z. Bilgisayar Donanımı, Türkmen Kitapevi, 2005
                        İstanbul.
                    </p>
                    <p class="my-auto">
                        - Pusula Yayıncılık, Bilgisayar Donanımı Kitabı pdf
                        (Public)
                    </p>
                    <p class="my-auto">- www.cizgi-tagem.org</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {};
    }
};
</script>

<style scoped>
.information {
    border-top: 2px solid #00c0ef;
    border-left: 1px solid lightgray;
    border-right: 1px solid lightgray;
    border-bottom: 1px solid lightgray;
}
.field-display {
    display: flex;
    border-bottom: 1px solid lightgray;
}
.field-display-title {
    width: 25%;
    font-weight: 500;
    font-size: 1rem;
    text-transform: capitalize;
}
.field-display-value {
    width: 75%;
    font-size: 0.8rem;
}
</style>
