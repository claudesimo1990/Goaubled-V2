<template>
    <section class="bg-page-header">
        <div v-for="(el,index) in fragen" class="col-md-12 faq">
            <h4 class="title">{{el.title}}</h4>
            <div v-for="(item,nber) in el.Fragen">
                <button class="accordion">{{item.frage.frage}}</button>
                <div class="panel">
                    <p v-html="item.frage.antwort"></p>
                    <hr>
                    <div v-if="item.frage.img">
                        <div class="row">
                            <div class="col-md-6">
                                <img class="zaeler" src="/images/home01/4verschiedeneZaehler-green.png" width:600px height:300px
                                     alt="zaelerstand.png">
                                <br><br>
                            </div>
                            <div class="col-md-6">
                                <img class="zaeler" src="/images/home01/zaelerstand.png" width:800px height:800px
                                     alt="zaelerstand.png">
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
    import faqs from "../../components/Data/faq";
    export default {
        data: function () {
            return {
                fragen: []
            }
        },
        created() {
            this.fragen = faqs.FAQ;
        }
    }
</script>
<style lang="scss" scoped>
    p{
        color: black !important;
        padding: 6px 19px 14px 16px;
    }
    .accordion {
        background-color: #eee;
        color: black;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border-bottom: 2px solid #8bc73d;
        text-align: left;
        outline: none;
        transition: 0.4s;
    }
    .active, .accordion:hover {
        background-color: #ccc;
    }
    .accordion:after {
        content: '\002B';
        color: #777;
        float: right;
        margin-left: 5px;
    }
    .active:after {
        content: "\2212";
    }
    .panel {
        padding: 0 18px;
        background-color: white;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }
    .faq {
        margin-top: 30px;
        margin-bottom: 20px;
        border-bottom: #8bc73d;
    }
    .title {
        margin-bottom: 20px;
        color: #8bc73d;
        text-align: center;
    }
    img {
        height: auto;
        max-width: 100%;
        margin-bottom: 10px;
        text-align: center;
    }
</style>