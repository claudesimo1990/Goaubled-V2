<template>
    <section class="pt-5 pb-5 testimonials">
        <div class="container">
            <div class="section-header">
                <h2 class="text-center">
                    Que disent nos utilisateurs
                </h2>
            </div>
            <div class="container">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousel-caption">
                                <p>If Shai Reznik's TDD videos don't convince you to add automated testing your code, I don't know what will.This was the very best explanation of frameworks for brginners that I've ever seen. </p> <img :src="users[1].avatar_original ? users[1].avatar_original : asset +'/UsersAvatars/'+ users[1].avatar" :alt="users[1].name" class="img-fluid rounded">
                                <div :id="'image-caption-'+ sortUsers[1].id">{{ sortUsers[1].name }}</div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-caption">
                                <p>If Shai Reznik's TDD videos don't convince you to add automated testing your code, I don't know what will.This was the very best explanation of frameworks for brginners that I've ever seen.</p> <img :src="users[2].avatar_original ? users[2].avatar_original : asset +'/UsersAvatars/'+ users[2].avatar" :alt="users[2].name" class="img-fluid rounded">
                                <div :id="'image-caption-'+ sortUsers[2].id">{{ sortUsers[2].name }}</div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-caption">
                                <p>If Shai Reznik's TDD videos don't convince you to add automated testing your code, I don't know what will.This was the very best explanation of frameworks for brginners that I've ever seen.</p> <img :src="users[3].avatar_original ? users[3].avatar_original : asset +'/UsersAvatars/'+ users[3].avatar" :alt="users[3].name" class="img-fluid rounded">
                                <div :id="'image-caption-'+ sortUsers[3].id">{{ sortUsers[3].name }}</div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev bg-transparent" href="#demo" data-slide="prev">
                        <i class='fas fa-arrow-left bg-secondary'></i>
                    </a>
                    <a class="carousel-control-next bg-transparent" href="#demo" data-slide="next">
                        <i class='fas fa-arrow-right bg-secondary'></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
export default {
  props: ['users', 'asset'],

    computed: {

      sortUsers: function() {
          return this.users.sort((a) => a.isAdmin !== 1 );
      }

    }
}
</script>

<style lang="scss" scoped>
@import "./../../../sass/_variables.scss";

.testimonials {
    min-height: 100vh;
    display: flex;
    align-items: center;
    background: #e9ecef;
}

#demo {
    background: linear-gradient(112deg, $quigo-second 50%, $quigo 50%);
    max-width: 900px;
    margin: auto
}

.carousel-caption {
    position: initial;
    z-index: 10;
    padding: 5rem 8rem;
    color: $white;
    text-align: center;
    font-size: 1.2rem;
    font-style: italic;
    font-weight: bold;
    line-height: 2rem
}

@media(max-width:767px) {
    .carousel-caption {
        position: initial;
        z-index: 10;
        padding: 3rem 2rem;
        color: rgba(78, 77, 77, 0.856);
        text-align: center;
        font-size: 0.7rem;
        font-style: italic;
        font-weight: bold;
        line-height: 1.5rem
    }
}

.carousel-caption img {
    width: 6rem;
    border-radius: 5rem;
    margin-top: 2rem
}

@media(max-width:767px) {
    .carousel-caption img {
        width: 4rem;
        border-radius: 4rem;
        margin-top: 1rem
    }
}

#image-caption {
    font-style: normal;
    font-size: 1rem;
    margin-top: 0.5rem
}

@media(max-width:767px) {
    #image-caption {
        font-style: normal;
        font-size: 0.6rem;
        margin-top: 0.5rem
    }
}

i {
    background-color: rgb(223, 56, 89);
    padding: 1.4rem
}

@media(max-width:767px) {
    i {
        padding: 0.8rem
    }
}

.carousel-control-prev {
    justify-content: flex-start
}

.carousel-control-next {
    justify-content: flex-end
}

.carousel-control-prev,
.carousel-control-next {
    transition: none;
    opacity: unset
}
</style>
