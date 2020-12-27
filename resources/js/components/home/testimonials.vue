<template>
    <section class="pt-5 pb-5 testimonials">
        <div class="container">
            <div class="section-header">
                <h2 class="text-center">
                    Que disent nos utilisateurs
                </h2>
            </div>
            <div class="card col-md-12 mt-2 mb-5 testimonials">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="100000">
                    <div class="w-100 carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="bg"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="carousel-caption bg-white">
                                        <div class="row">
                                            <div class="col-sm-3 col-4 align-items-start">
                                                <img :src="users[4].avatar_original ? users[4].avatar_original : asset +'/UsersAvatars/'+ users[4].avatar" :alt="users[4].name" class="rounded-circle img-fluid">
                                            </div>
                                            <div class="col-sm-9 col-8">
                                            <h2>{{ users[4].name }}</h2>
                                                <p>Well incremented. Comes with recommended workout. I'm using it to help with bladder leakage issues that I've been experiencing since a recent vasectomy.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="carousel-caption bg-white">
                                        <div class="row">
                                            <div class="col-sm-3 col-4 align-items-start">
                                                <img :src="users[1].avatar_original ? users[1].avatar_original : asset +'/UsersAvatars/'+ users[1].avatar" :alt="users[1].name" class="rounded-circle img-fluid">
                                            </div>
                                            <div class="col-sm-9 col-8">
                                                <h2>{{ users[1].name }}</h2>
                                                <p>Well incremented. Comes with recommended workout. I'm using it to help with bladder leakage issues that I've been experiencing since a recent vasectomy.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="bg"></div>
                                <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="carousel-caption bg-white">
                                        <div class="row">
                                            <div class="col-sm-3 col-4 align-items-start">
                                                <img :src="users[2].avatar_original ? users[2].avatar_original : asset +'/UsersAvatars/'+ users[2].avatar" :alt="users[2].name" class="rounded-circle img-fluid">
                                            </div>
                                            <div class="col-sm-9 col-8">
                                            <h2>{{ users[2].name }}</h2>
                                                <p>Well incremented. Comes with recommended workout. I'm using it to help with bladder leakage issues that I've been experiencing since a recent vasectomy.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="carousel-caption bg-white">
                                        <div class="row">
                                            <div class="col-sm-3 col-4 align-items-start">
                                                <img :src="users[3].avatar_original ? users[3].avatar_original : asset +'/UsersAvatars/'+ users[3].avatar" :alt="users[3].name" class="rounded-circle img-fluid">
                                            </div>
                                            <div class="col-sm-9 col-8">
                                            <h2>{{ users[3].name }}</h2>
                                                <p>Well incremented. Comes with recommended workout. I'm using it to help with bladder leakage issues that I've been experiencing since a recent vasectomy.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                    <div class="mb-5">
                        <a class="carousel-control-prev next-button" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                        </a>
                        <a class="carousel-control-next next-button" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                        </a>
                    </div>
                </div>
            </div> 
        </div>
    </section>
</template>
<script>
export default {
  props: ['users', 'asset']
}
</script>

<style lang="scss" scoped>
@import "./../../../sass/_variables.scss";

.testimonials {
  background-color: $gray-50;
}
.card {
	margin: 0 auto;
	border: none;
}
.card .carousel-item {
	min-height: 190px;
}
.card .carousel-caption {
	padding: 0;
	right: 15px;
	left: 15px;
	top: 15px;
	color: #3d3d3d;
	border: 1px solid #ccc;
	min-height:175px;
	padding: 15px;
}
.next-button {
    background-color: $quigo;
}
.card .carousel-caption .col-sm-3 {
	display: flex;
	align-items: center;
}
.card .carousel-caption .col-sm-9 {
	text-align: left;
}
.card .carousel-control-prev, .card .carousel-control-next {
	color: #3d3d3d !important;
	opacity: 1 !important;
}
.carousel-control-prev-icon, .carousel-control-next-icon {
	background-image: none;
	color: #fff;
	font-size: 14px;
	background-color: $quigo;
	height: 32px;
	line-height: 32px;
	width: 32px;
}
.carousel-control-prev-icon:hover, .carousel-control-next-icon:hover {
	opacity: 0.85;
}
.carousel-control-prev {
	left: 40%;
	top: 110%;
}
.carousel-control-next {
	right: 40%;
	top: 110%;
}
.midline {
	width: 60px;
	border-top: 1px solid $quigo;
}
.carousel-caption h2 {
	font-size: 14px;
}
.carousel-caption h2 span {
	color: white;
}
 @media (min-width: 320px) and (max-width: 575px) {
.carousel-caption {
	position: relative;
}
.card .carousel-caption {
	left: 0;
	top: 0;
	margin-bottom: 15px;
}
.card .carousel-caption img {
	margin: 0 auto;
}
.carousel-control-prev {
	left: 35%;
	top: 105%;
    background-color: $quigo !important;
}
.carousel-control-next {
	right: 35%;
	top: 105%;
    background-color: $quigo !important;
}
.card .carousel-caption h3 {
        margin-top: 0;
        font-size: 16px;
        font-weight: 700;
    }
}
@media (min-width: 576px) and (max-width: 767px) {
.carousel-caption {
	position: relative;
}
.card .carousel-caption {
	left: 0;
	top: 0;
	margin-bottom: 15px;
}
.card .carousel-caption img {
	margin: 0 auto;
}
.card .carousel-caption h3, .card .carousel-caption small {
	text-align: center;
}
.carousel-control-prev {
	left: 35%;
	top: 105%;
    background-color: $quigo !important;
}
.carousel-control-next {
        right: 35%;
        top: 105%;
        background-color: $quigo !important;
    }
}
@media (min-width: 767px) and (max-width: 991px) {
    .card .carousel-caption h3 {
        margin-top: 0;
        font-size: 16px;
        font-weight: 700;
    }
}
</style>
