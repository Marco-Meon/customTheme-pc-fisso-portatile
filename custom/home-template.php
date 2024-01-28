<?php /* Template Name: Home Template */ ?>

<?php get_header();?>

<?php if (have_posts()) :?><?php while(have_posts()) : the_post();?>

<?php 
  $image_attributes =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
?>


<section class="cover overflow">
  <div class="cover__content">
    <img class="cover__logo fade-in" src="<?php echo get_stylesheet_directory_uri() ?>/custom/img/logo.svg" alt="">
    <a href="" class="button cover__button fade-in">
      <span class="button-upper-1"></span>
      <span class="button-upper-2"></span>
      <span class="button-upper"></span>
      Scoprilo ora
      <span class="button-lower"></span>
      <span class="button-lower-1"></span>
      <span class="button-lower-2"></span>
    </a>
  </div>
  <img class="cover__img" src="<?php echo get_stylesheet_directory_uri() ?>/custom/img/image-2.png" alt="">
</section>


<section class="section-1">
  <div class="section-1__container">

    <div class="section-1__card section-1__card-1">
      <span class="section-1__card-num">1</span>
      <div class="section-1__card-content">
        <h3>Piu' di un semplice computer</h3>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro est debitis animi commodi, necessitatibus ipsam. Iure dolorum eum ut vitae ducimus quos, optio, excepturi rerum minus, similique sapiente. Ullam, est!
        </p>
      </div>
    </div>

    <div class="section-1__card section-1__card-2">
      <span class="section-1__card-num">2</span>
      <div class="section-1__card-content">
        <h3>Piu' di un semplice computer</h3>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro est debitis animi commodi, necessitatibus ipsam. Iure dolorum eum ut vitae ducimus quos, optio, excepturi rerum minus, similique sapiente. Ullam, est!
        </p>
      </div>
    </div>

    <div class="section-1__card section-1__card-3">
      <span class="section-1__card-num">3</span>
      <div class="section-1__card-content">
        <h3>Piu' di un semplice computer</h3>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro est debitis animi commodi, necessitatibus ipsam. Iure dolorum eum ut vitae ducimus quos, optio, excepturi rerum minus, similique sapiente. Ullam, est!
        </p>
      </div>
    </div>

  </div>
</section>


<section class="section-2">
  <h2>Scoprilo nella sua interezza</h2>
  <div class="section-2__container-big">
    <div class="section-2__container">
      <div class="section-2__image-cont section-2__image-cont-1">
        <img class="section-2__image-1" src="<?php echo get_stylesheet_directory_uri() ?>/custom/img/image-1.png" alt="">
      </div>
      <div class="section-2__image-cont section-2__image-cont-2">
        <img class="section-2__image-2" src="<?php echo get_stylesheet_directory_uri() ?>/custom/img/image-2.png" alt="">
      </div>
    </div>
  </div>
</section>


<div class="full-line"></div>


<!--SVG GRADIENTS AND SPRITES PART-->
<svg aria-hidden="true" focusable="false">
  <defs>

    <symbol id="icon-brain" viewBox="0 0 87 69">
      <path d="M20.3921 26.5479H5.12109C4.61509 26.5479 4.20508 26.9579 4.20508 27.4639V31.7228C4.20508 32.2288 4.61509 32.6389 5.12109 32.6389H20.3921C20.8981 32.6389 21.3081 32.2288 21.3081 31.7228V27.4639C21.3081 26.9579 20.8981 26.5479 20.3921 26.5479ZM19.4761 30.8068H6.03708V28.3799H19.4761V30.8068Z"/>
      <path d="M20.3921 34.937H5.12109C4.61509 34.937 4.20508 35.347 4.20508 35.853V40.1121C4.20508 40.6181 4.61509 41.028 5.12109 41.028H20.3921C20.8981 41.028 21.3081 40.6181 21.3081 40.1121V35.853C21.3081 35.347 20.8981 34.937 20.3921 34.937ZM19.4761 39.196H6.03708V36.769H19.4761V39.196Z"/>
      <path d="M79.874 0H14.965C11.428 0 8.55099 2.878 8.55099 6.414V21.949H0.915985C0.409985 21.949 0 22.359 0 22.865V67.379C0 67.885 0.409985 68.295 0.915985 68.295H24.597C25.103 68.295 25.513 67.885 25.513 67.379V54.93H40.162V62.871H37.617C34.854 62.871 32.606 65.119 32.606 67.882C32.606 68.388 33.016 68.798 33.522 68.798H61.315C61.821 68.798 62.231 68.388 62.231 67.882C62.231 65.119 59.983 62.871 57.22 62.871H54.675V54.93H79.872C83.409 54.93 86.286 52.052 86.286 48.516V6.41299C86.288 2.87699 83.411 0 79.874 0ZM23.681 66.462H1.83298V23.781H9.46799H13.741H23.681V49.897V54.014V66.462ZM24.597 21.948H14.657V6.40201H80.183V48.98H25.514V22.864C25.513 22.358 25.103 21.948 24.597 21.948ZM60.265 66.966H34.574C34.968 65.659 36.184 64.704 37.618 64.704H41.079H53.761H57.222C58.656 64.704 59.871 65.659 60.265 66.966ZM52.844 62.871H41.995V54.93H52.844V62.871ZM84.455 48.517C84.455 51.043 82.4 53.098 79.874 53.098H53.761H41.079H25.514V50.814H81.1C81.606 50.814 82.016 50.404 82.016 49.898V5.487C82.016 4.981 81.606 4.57101 81.1 4.57101H13.742C13.236 4.57101 12.826 4.981 12.826 5.487V21.949H10.386V6.414C10.386 3.888 12.441 1.83301 14.967 1.83301H79.876C82.402 1.83301 84.457 3.888 84.457 6.414V48.517H84.455Z"/>
      <path d="M12.757 44.5591C10.994 44.5591 9.56006 45.9921 9.56006 47.7551C9.56006 49.1971 10.5261 50.4051 11.8401 50.8021V58.9001C11.8401 59.4061 12.25 59.8161 12.756 59.8161C13.262 59.8161 13.6721 59.4061 13.6721 58.9001V50.8021C14.9861 50.4051 15.9531 49.1971 15.9531 47.7551C15.9541 45.9931 14.519 44.5591 12.757 44.5591ZM12.757 49.1201C12.005 49.1201 11.3931 48.5081 11.3931 47.7551C11.3931 47.0031 12.005 46.3911 12.757 46.3911C13.509 46.3911 14.122 47.0031 14.122 47.7551C14.121 48.5081 13.509 49.1201 12.757 49.1201Z"/>
    </symbol>

    <symbol id="icon-bulb" viewBox="0 0 77 77">
      <path d="M25.979 50.6369H50.615C51.121 50.6369 51.531 50.2269 51.531 49.7209V26.8779C51.531 26.3719 51.121 25.9619 50.615 25.9619H25.979C25.473 25.9619 25.063 26.3719 25.063 26.8779V49.7209C25.063 50.2269 25.473 50.6369 25.979 50.6369ZM26.896 27.7939H49.7V48.8049H26.896V27.7939Z"/>
      <path d="M0.832001 49.668C0.360001 49.712 0 50.107 0 50.581V58.082C0 58.555 0.361001 58.951 0.832001 58.995L12.429 60.06C12.705 62.246 14.402 63.956 16.539 64.18L17.603 75.766C17.647 76.237 18.042 76.598 18.516 76.598H26.016C26.489 76.598 26.885 76.237 26.929 75.766L27.989 64.229H32.575L33.635 75.766C33.679 76.237 34.074 76.598 34.548 76.598H42.049C42.522 76.598 42.918 76.237 42.962 75.766L44.022 64.229H48.608L49.668 75.766C49.712 76.237 50.107 76.598 50.581 76.598H58.082C58.555 76.598 58.951 76.237 58.995 75.766L60.059 64.18C62.196 63.953 63.893 62.244 64.169 60.06L75.766 58.995C76.238 58.951 76.598 58.556 76.598 58.082V50.581C76.598 50.108 76.237 49.712 75.766 49.668L64.229 48.608V44.022L75.766 42.962C76.238 42.918 76.598 42.523 76.598 42.049V34.549C76.598 34.076 76.237 33.68 75.766 33.636L64.229 32.576V27.99L75.766 26.93C76.238 26.886 76.598 26.491 76.598 26.017V18.516C76.598 18.043 76.237 17.647 75.766 17.603L64.169 16.538C63.893 14.354 62.196 12.645 60.059 12.418L58.995 0.832001C58.951 0.360001 58.556 0 58.082 0H50.581C50.108 0 49.712 0.361001 49.668 0.832001L48.608 12.369H44.022L42.962 0.832001C42.918 0.360001 42.523 0 42.049 0H34.548C34.075 0 33.679 0.361001 33.635 0.832001L32.575 12.369H27.989L26.929 0.832001C26.885 0.360001 26.49 0 26.016 0H18.516C18.043 0 17.647 0.361001 17.603 0.832001L16.539 12.418C14.402 12.642 12.705 14.352 12.429 16.538L0.832001 17.603C0.360001 17.647 0 18.042 0 18.516V26.017C0 26.49 0.361001 26.886 0.832001 26.93L12.369 27.99V32.576L0.832001 33.636C0.360001 33.68 0 34.075 0 34.549V42.049C0 42.522 0.361001 42.918 0.832001 42.962L12.369 44.022V48.608L0.832001 49.668ZM1.832 51.416L12.369 50.448V53.346H9.03C8.524 53.346 8.11398 53.756 8.11398 54.262C8.11398 54.768 8.524 55.178 9.03 55.178H12.369V58.213L1.832 57.245V51.416ZM25.18 74.765H19.352L18.384 64.228H21.281V67.567C21.281 68.073 21.691 68.483 22.197 68.483C22.703 68.483 23.113 68.073 23.113 67.567V64.228H26.148L25.18 74.765ZM41.213 74.765H35.384L34.416 64.228H37.314V67.567C37.314 68.073 37.724 68.483 38.23 68.483C38.736 68.483 39.146 68.073 39.146 67.567V64.228H42.181L41.213 74.765ZM57.244 74.765H51.415L50.447 64.228H53.345V67.567C53.345 68.073 53.755 68.483 54.261 68.483C54.767 68.483 55.177 68.073 55.177 67.567V64.228H58.212L57.244 74.765ZM74.764 51.416V57.245L64.227 58.213V55.315H67.566C68.072 55.315 68.482 54.905 68.482 54.399C68.482 53.893 68.072 53.483 67.566 53.483H64.227V50.448L74.764 51.416ZM74.764 35.385V41.213L64.227 42.181V39.284H67.566C68.072 39.284 68.482 38.874 68.482 38.368C68.482 37.862 68.072 37.452 67.566 37.452H64.227V34.417L74.764 35.385ZM74.764 25.182L64.227 26.15V23.252H67.566C68.072 23.252 68.482 22.842 68.482 22.336C68.482 21.83 68.072 21.42 67.566 21.42H64.227V18.385L74.764 19.353V25.182ZM51.415 1.83301H57.244L58.212 12.37H55.314V9.03201C55.314 8.52601 54.904 8.116 54.398 8.116C53.892 8.116 53.482 8.52601 53.482 9.03201V12.37H50.447L51.415 1.83301ZM35.383 1.83301H41.212L42.18 12.37H39.282V9.03201C39.282 8.52601 38.872 8.116 38.366 8.116C37.86 8.116 37.45 8.52601 37.45 9.03201V12.37H34.415L35.383 1.83301ZM19.352 1.83301H25.18L26.148 12.37H23.251V9.03201C23.251 8.52601 22.841 8.116 22.335 8.116C21.829 8.116 21.419 8.52601 21.419 9.03201V12.37H18.384L19.352 1.83301ZM14.202 17.152C14.202 15.525 15.459 14.202 17.005 14.202H17.38H27.153H33.412H43.186H49.444H59.218H59.587C61.136 14.202 62.397 15.525 62.397 17.152V17.38V27.154V33.413V43.186V49.445V59.219V59.447C62.397 61.074 61.136 62.397 59.587 62.397H59.218H49.444H43.186H33.412H27.153H17.38H17.005C15.459 62.397 14.202 61.074 14.202 59.447V59.219V49.445V43.186V33.413V27.154V17.38V17.152ZM1.832 25.182V19.353L12.369 18.385V21.283H9.03C8.524 21.283 8.11398 21.693 8.11398 22.199C8.11398 22.705 8.524 23.115 9.03 23.115H12.369V26.15L1.832 25.182ZM1.832 41.213V35.385L12.369 34.417V37.315H9.03C8.524 37.315 8.11398 37.725 8.11398 38.231C8.11398 38.737 8.524 39.147 9.03 39.147H12.369V42.181L1.832 41.213Z"/>
    </symbol>

    <symbol id="icon-customers" viewBox="0 0 87 60">
      <path d="M85.373 49.841H81.088V6.414C81.088 2.877 78.211 0 74.674 0H11.615C8.07802 0 5.20102 2.877 5.20102 6.414V49.841H0.916016C0.410016 49.841 0 50.251 0 50.757V52.591C0 56.464 3.15001 59.614 7.02301 59.614H79.265C83.138 59.614 86.288 56.464 86.288 52.591V50.757C86.29 50.251 85.879 49.841 85.373 49.841ZM7.035 6.414C7.035 3.888 9.09 1.83301 11.616 1.83301H74.675C77.201 1.83301 79.256 3.888 79.256 6.414V49.841H76.477V5.77701C76.477 5.27101 76.067 4.86101 75.561 4.86101H10.731C10.225 4.86101 9.815 5.27101 9.815 5.77701V49.841H7.035V6.414ZM30.891 51.673H55.4V53.811H30.891V51.673ZM56.317 49.841H29.975H11.648V6.69301H74.645V49.841H56.317ZM84.457 52.591C84.457 55.453 82.128 57.782 79.266 57.782H7.02402C4.16202 57.782 1.83301 55.453 1.83301 52.591V51.673H6.11801H10.73H29.057V54.727C29.057 55.233 29.467 55.643 29.973 55.643H56.315C56.821 55.643 57.231 55.233 57.231 54.727V51.673H75.559H80.171H84.456V52.591H84.457Z"/>
    </symbol>

    <symbol id="icon-rocket" viewBox="0 0 87 60">
      <path d="M85.371 0H0.915985C0.409985 0 0 0.41 0 0.916V53.532C0 54.038 0.409985 54.448 0.915985 54.448H23.009L20.837 58.605C20.689 58.889 20.7 59.23 20.866 59.504C21.032 59.778 21.329 59.946 21.65 59.946H25.696C25.845 59.946 25.99 59.91 26.122 59.841L36.383 54.449H49.906L60.167 59.841C60.299 59.91 60.444 59.946 60.593 59.946H64.64C64.96 59.946 65.257 59.779 65.424 59.504C65.59 59.23 65.6 58.889 65.453 58.605L63.281 54.448H85.373C85.879 54.448 86.289 54.038 86.289 53.532V0.916C86.287 0.41 85.877 0 85.371 0ZM25.469 58.114H23.161L25.076 54.449H32.443L25.469 58.114ZM63.126 58.114H60.817L53.843 54.449H61.21L63.126 58.114ZM84.454 52.616H61.765H50.13H36.156H24.521H1.832V1.832H84.455V52.616H84.454Z"/>
      <path d="M4.58005 50.784H81.7051C82.2111 50.784 82.621 50.374 82.621 49.868V4.58202C82.621 4.07602 82.2111 3.66602 81.7051 3.66602H4.58005C4.07405 3.66602 3.66406 4.07602 3.66406 4.58202V49.868C3.66406 50.374 4.07405 50.784 4.58005 50.784ZM5.49707 5.49802H80.79V48.952H5.49707V5.49802Z"/>
    </symbol>

    <symbol id="icon-seo" viewBox="0 0 82 81">
      <path d="M25.3761 64.3691H17.3301C16.8241 64.3691 16.4141 64.7792 16.4141 65.2852C16.4141 65.7912 16.8241 66.2012 17.3301 66.2012H25.3761C25.8821 66.2012 26.2921 65.7912 26.2921 65.2852C26.2931 64.7792 25.8821 64.3691 25.3761 64.3691Z"/>
      <path d="M17.3301 48.9272H25.3761C25.8821 48.9272 26.2921 48.5172 26.2921 48.0112C26.2921 47.5052 25.8821 47.0952 25.3761 47.0952H17.3301C16.8241 47.0952 16.4141 47.5052 16.4141 48.0112C16.4141 48.5172 16.8241 48.9272 17.3301 48.9272Z"/>
      <path d="M80.902 31.948H71.745C68.137 22.204 63.352 14.278 57.324 14.278C51.296 14.278 46.511 22.204 42.903 31.948H24.072V31.527C24.072 29.414 22.353 27.694 20.239 27.694H16.639V6.78601C16.639 4.05401 18.861 1.83197 21.593 1.83197H25.371C27.794 1.83197 29.812 3.581 30.239 5.883C27.771 5.95 25.781 7.96797 25.781 10.452V11.77C23.488 12.432 21.804 14.545 21.804 17.049V18.149C21.804 18.655 22.214 19.065 22.72 19.065H27.611C28.023 20.693 29.488 21.906 31.242 21.906C32.996 21.906 34.461 20.693 34.872 19.065H39.763C40.269 19.065 40.679 18.655 40.679 18.149V17.049C40.679 14.545 38.995 12.432 36.702 11.77V10.452C36.702 7.92597 34.647 5.87097 32.121 5.87097H32.088C31.638 2.56197 28.801 0 25.371 0H21.593C17.851 0 14.807 3.04499 14.807 6.78699V27.695H11.207C9.094 27.695 7.37399 29.415 7.37399 31.528V31.949H0.916016C0.410016 31.949 0 32.359 0 32.865V38.781C0 39.287 0.410016 39.697 0.916016 39.697H5.32401V79.484C5.32401 79.99 5.73402 80.4 6.24002 80.4H12.156C12.662 80.4 13.072 79.99 13.072 79.484V74.957H30.851C31.357 74.957 31.767 74.547 31.767 74.041V39.697H40.356C38.651 45.524 37.319 51.434 36.351 56.315C35.908 58.552 36.482 60.844 37.928 62.604C39.372 64.363 41.507 65.372 43.785 65.372H54.957V76.643H53.025C52.727 75.839 51.96 75.263 51.052 75.263C49.887 75.263 48.942 76.208 48.942 77.373C48.942 78.538 49.887 79.483 51.052 79.483H54.957H59.453H63.358C64.523 79.483 65.468 78.538 65.468 77.373C65.468 76.208 64.523 75.263 63.358 75.263C62.45 75.263 61.683 75.839 61.385 76.643H59.453V65.372H68.745V79.482C68.745 79.988 69.155 80.398 69.661 80.398H75.577C76.083 80.398 76.493 79.988 76.493 79.482V62.849C76.567 62.766 76.647 62.69 76.718 62.603C78.164 60.843 78.738 58.551 78.295 56.314C77.793 53.782 77.191 50.972 76.492 48.042V39.696H80.901C81.407 39.696 81.817 39.286 81.817 38.78V32.864C81.819 32.358 81.408 31.948 80.902 31.948ZM31.242 20.073C30.512 20.073 29.876 19.665 29.55 19.065H32.934C32.607 19.665 31.971 20.073 31.242 20.073ZM38.847 17.049V17.232H34.082H28.401H23.636V17.049C23.636 15.028 25.28 13.384 27.301 13.384H35.182C37.203 13.384 38.847 15.027 38.847 17.049ZM34.87 10.452V11.552H27.613V10.452C27.613 8.93597 28.846 7.703 30.362 7.703H32.122C33.637 7.703 34.87 8.93597 34.87 10.452ZM9.20599 31.528C9.20599 30.425 10.103 29.527 11.207 29.527H20.239C21.342 29.527 22.239 30.424 22.239 31.528V31.949H9.20599V31.528ZM11.24 78.567H7.15601V39.697H11.24V74.041V78.567ZM13.072 73.125V57.328H29.935V73.125H13.072ZM29.935 55.495H13.072V39.697H29.935V55.495ZM40.905 37.865H30.851H12.156H6.24002H1.832V33.781H8.29001H23.155H42.236C42.174 33.959 42.114 34.146 42.053 34.326C42.016 34.434 41.981 34.543 41.944 34.651C41.787 35.117 41.63 35.583 41.476 36.06C41.333 36.501 41.194 36.945 41.056 37.388C41.006 37.548 40.955 37.703 40.905 37.865ZM74.661 78.567H70.577V65.373H70.862C71.176 65.373 71.486 65.35 71.792 65.312C71.898 65.299 72.001 65.277 72.106 65.259C72.305 65.226 72.503 65.189 72.698 65.141C72.817 65.111 72.934 65.076 73.052 65.041C73.232 64.987 73.41 64.926 73.585 64.859C73.697 64.816 73.808 64.772 73.917 64.724C74.106 64.641 74.289 64.548 74.47 64.449C74.532 64.415 74.599 64.39 74.66 64.354V78.567H74.661ZM75.303 61.443C75.182 61.59 75.052 61.728 74.919 61.861C74.829 61.951 74.733 62.034 74.637 62.118C74.58 62.168 74.524 62.22 74.465 62.268C74.38 62.337 74.292 62.399 74.204 62.462C74.126 62.518 74.047 62.575 73.966 62.627C73.888 62.678 73.807 62.725 73.727 62.771C73.629 62.827 73.531 62.882 73.43 62.932C73.357 62.969 73.283 63.003 73.209 63.037C73.095 63.088 72.98 63.134 72.863 63.178C72.794 63.204 72.725 63.229 72.655 63.252C72.529 63.293 72.4 63.328 72.27 63.361C72.204 63.377 72.14 63.396 72.073 63.41C71.932 63.44 71.79 63.462 71.646 63.481C71.588 63.489 71.53 63.501 71.471 63.507C71.269 63.528 71.065 63.541 70.86 63.541H69.659H43.783C42.056 63.541 40.437 62.776 39.342 61.443C38.246 60.108 37.81 58.369 38.147 56.672C39.448 50.113 40.871 44.269 42.386 39.196C42.412 39.146 42.443 39.1 42.46 39.045C43.078 36.993 43.728 35.019 44.393 33.175C44.42 33.099 44.435 33.021 44.442 32.943C48.399 22.047 52.844 16.111 57.323 16.111C61.802 16.111 66.247 22.048 70.203 32.943C70.21 33.021 70.225 33.099 70.252 33.175C70.916 35.018 71.567 36.993 72.185 39.045C73.048 41.91 73.89 45.049 74.685 48.375C74.69 48.394 74.702 48.409 74.707 48.427C75.325 51.036 75.924 53.781 76.497 56.672C76.835 58.369 76.4 60.108 75.303 61.443ZM74.661 40.988C74.539 40.558 74.417 40.127 74.291 39.697H74.661V40.988ZM79.986 37.865H75.577H73.742C73.716 37.781 73.689 37.7 73.663 37.617C73.501 37.094 73.337 36.572 73.169 36.054C73.02 35.593 72.868 35.143 72.717 34.693C72.675 34.567 72.633 34.441 72.59 34.316C72.53 34.14 72.471 33.957 72.411 33.782H79.986V37.865Z"/>
    </symbol>

    <symbol id="icon-target" viewBox="0 0 82 49">
      <path d="M80.581 0H0.916C0.41 0 0 0.410016 0 0.916016V41.284V47.602C0 48.108 0.41 48.518 0.916 48.518H80.581C81.087 48.518 81.497 48.108 81.497 47.602V41.284V0.916016C81.497 0.409016 81.087 0 80.581 0ZM1.833 42.2H79.665V43.526H1.833V42.2ZM1.833 1.83203H79.665V40.368H1.833V1.83203ZM1.833 46.686V45.359H79.665V46.686H1.833Z"/>
      <path d="M40.5811 16.4609C41.9791 16.4609 44.4761 17.446 46.1031 18.34L48.0281 14.306C46.5161 13.344 44.4311 12.656 42.2991 12.473V8.89795H38.4951V12.702C35.7911 13.366 34.1641 15.13 34.1641 17.629C34.1641 23.266 42.4821 21.891 42.4821 23.976C42.4821 24.55 41.9781 24.801 41.1991 24.801C39.5721 24.801 36.7311 23.679 35.0811 22.304L33.1101 26.291C34.5771 27.414 36.5241 28.2159 38.4951 28.5829V32.4789H42.2991V28.812C45.4151 28.492 47.9131 26.887 47.9131 23.702C47.9131 17.882 39.5951 19.1419 39.5951 17.1249C39.5961 16.6429 39.9851 16.4609 40.5811 16.4609Z"/>
      <path d="M75.477 13.2719C70.838 13.2719 67.064 9.49789 67.064 4.85889C67.064 4.35289 66.654 3.94287 66.148 3.94287H15.349C14.843 3.94287 14.433 4.35289 14.433 4.85889C14.433 9.49689 10.659 13.2719 6.02 13.2719C5.514 13.2719 5.104 13.6819 5.104 14.1879V28.0119C5.104 28.5179 5.514 28.9279 6.02 28.9279C10.659 28.9279 14.433 32.7019 14.433 37.3409C14.433 37.8469 14.843 38.2569 15.349 38.2569H66.148C66.654 38.2569 67.064 37.8469 67.064 37.3409C67.064 32.7029 70.838 28.9279 75.477 28.9279C75.983 28.9279 76.393 28.5179 76.393 28.0119V14.1879C76.393 13.6809 75.983 13.2719 75.477 13.2719ZM74.561 27.1359C69.641 27.5739 65.71 31.5039 65.273 36.4249H16.225C15.787 31.5049 11.857 27.5749 6.93701 27.1359V15.0639C11.857 14.6259 15.788 10.6959 16.225 5.7749H65.273C65.711 10.6949 69.641 14.6249 74.561 15.0639V27.1359Z"/>
      <path d="M20.8191 24.1109C22.482 24.1109 23.8301 22.7628 23.8301 21.0999C23.8301 19.4369 22.482 18.0889 20.8191 18.0889C19.1562 18.0889 17.8081 19.4369 17.8081 21.0999C17.8081 22.7628 19.1562 24.1109 20.8191 24.1109Z"/>
      <path d="M60.678 24.1109C62.3409 24.1109 63.689 22.7628 63.689 21.0999C63.689 19.4369 62.3409 18.0889 60.678 18.0889C59.0151 18.0889 57.667 19.4369 57.667 21.0999C57.667 22.7628 59.0151 24.1109 60.678 24.1109Z"/>
    </symbol>

  </defs>
</svg>
<!--END SVG GRADIENT PART-->

<section class="timeline__content">
  <div class="timeline__container">
    <div class="timeline">
      <div class="timeline__stepper">

        <div class="timeline__step is-active">
          <svg class="timeline__icon timeline__icon--default">
            <use href="#icon-brain"/>
          </svg>
          <svg class="timeline__icon timeline__icon--active">
            <use href="#icon-brain"/>
          </svg>
          <p class="timeline__step-title">
            Brainstorm
          </p>
        </div>

        <div class="timeline__step">
          <svg class="timeline__icon timeline__icon--default">
            <use href="#icon-bulb"/>
          </svg>
          <svg class="timeline__icon timeline__icon--active">
            <use href="#icon-bulb"/>
          </svg>
          <p class="timeline__step-title">
            Discuss<br/>Ideas
          </p>
        </div>

        <div class="timeline__step">
          <svg class="timeline__icon timeline__icon--default">
            <use href="#icon-rocket"/>
          </svg>
          <svg class="timeline__icon timeline__icon--active">>
            <use href="#icon-rocket"/>
          </svg>
          <p class="timeline__step-title">
            Make<br/>Project
          </p>
        </div>

        <div class="timeline__step">
          <svg class="timeline__icon timeline__icon--default">
            <use href="#icon-target"/>
          </svg>
          <svg class="timeline__icon timeline__icon--active">
            <use href="#icon-target"/>
          </svg>
          <p class="timeline__step-title">
            Select<br/>Strategy
          </p>
        </div>

        <div class="timeline__step">
          <svg class="timeline__icon timeline__icon--default">
            <use href="#icon-seo"/>
          </svg>
          <svg class="timeline__icon timeline__icon--active">
            <use href="#icon-seo"/>
          </svg>
          <p class="timeline__step-title">
            SEO<br/>Target
          </p>
        </div>

        <div class="timeline__step">
          <svg class="timeline__icon timeline__icon--default">
            <use href="#icon-customers"/>
          </svg>
          <svg class="timeline__icon timeline__icon--active">
            <use href="#icon-customers"/>
          </svg>
          <p class="timeline__step-title">
            Happy<br />Customers
          </p>
        </div>

      </div>

      <div class="timeline__slides">
        <div class="timeline__slide">
          <h3 class="timeline__slide-title">Brainstorm</h3>
          <div class="timeline__slide-content">
            <p>Brainstorming is a great way to generate new ideas or to solve problems. When you
              engage in brainstorming, you allow yourself to think freely without any
              restrictions or limitations.</p>
          </div>
        </div>

        <div class="timeline__slide">
          <h3 class="timeline__slide-title">Discuss Ideas</h3>
          <div class="timeline__slide-content">
            <p>In order to fully explore and develop ideas, it is essential to engage in thoughtful
              and meaningful discussion. This can involve exchanging viewpoints and perspectives
              with others, asking probing questions, and considering alternative approaches.</p>
          </div>
        </div>

        <div class="timeline__slide">
          <h3 class="timeline__slide-title">Make Project</h3>
          <div class="timeline__slide-content">
            <p>Creating a project involves many steps, such as identifying the problem or
              opportunity, defining the scope and objectives, determining the resources
              needed, planning the timeline and milestones, executing the plan, and monitoring
              and controlling the project progress. </p>
          </div>
        </div>

        <div class="timeline__slide">
          <h3 class="timeline__slide-title">Select Strategy</h3>
          <div class="timeline__slide-content">
            <p>When it comes to selecting a strategy, there are several factors to consider. For
              example, you should think about the company's goals, available resources, and
              industry trends. Additionally, you may want to do some market research to identify
              potential opportunities and areas of growth.</p>
          </div>
        </div>

        <div class="timeline__slide">
          <h3 class="timeline__slide-title">SEO Target</h3>
          <div class="timeline__slide-content">
            <p>SEO target is an essential component of digital marketing. It is a process of
              optimizing the website and its content to improve its ranking in search engine
              results pages. </p>
          </div>
        </div>

        <div class="timeline__slide">
          <h3 class="timeline__slide-title">Happy Customers</h3>
          <div class="timeline__slide-content">
            <p>Happy customers are the backbone of any successful business. They are the ones who
              keep coming back, bringing their friends and family along, and spreading the word
              about your brand.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<div class="full-line"></div>


<section class="section-4">
  <div class="section-4__image-big">
    <img class="js-section-4-image-big" src="<?php echo get_stylesheet_directory_uri() ?>/custom/img/image-1.png" alt="">
  </div>
  <div class="section-4__images">
    <img class="js-section-4-image-1 js-section-4-image-small" src="<?php echo get_stylesheet_directory_uri() ?>/custom/img/image-2.png" alt="">
    <img class="js-section-4-image-2 js-section-4-image-small" src="<?php echo get_stylesheet_directory_uri() ?>/custom/img/image-3.png" alt="">
    <img class="js-section-4-image-2 js-section-4-image-small" src="<?php echo get_stylesheet_directory_uri() ?>/custom/img/image-3.png" alt="">
  </div>
</section>


<section class="section-5">
  <div class="section-5__container">
    <div class="section-5__content">
      <h2>Titolo lorem ipsum sia amet</h2>
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste dolor, deserunt, saepe cum neque nam, odio nulla nesciunt consequuntur dolores maxime tenetur ratione impedit quos mollitia atque harum consequatur nobis.
        </br></br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, iure quidem? Corporis repellat, voluptatum voluptatibus com
      </p>
      <a href="" class="button section-5__button">
        <span class="button-upper-1"></span>
        <span class="button-upper-2"></span>
        <span class="button-upper"></span>
        Scoprilo ora
        <span class="button-lower"></span>
        <span class="button-lower-1"></span>
        <span class="button-lower-2"></span>
      </a>
    </div>
    <div class="section-5__image">
      <img src="<?php echo get_stylesheet_directory_uri() ?>/custom/img/image-1.png" alt="">
    </div>
  </div>
</section>


<section class="section-social">
  <h2>I nostri social</h2>
  <div class="section-social__container">
    <a href="" class="section-social__link">
      <p>YouTube</p>
    </a>
    <a href="" class="section-social__link">
      <p>Instagram</p>
    </a>
    <a href="" class="section-social__link">
      <p>Tik Tok</p>
    </a>
  </div>
</section>


<section class="section-collab">
  <h2>Ultime Collaborazioni</h2>
  <div class="section-collab__container">

    <div class="section-collab__video">
      <lite-youtube videoid="fMpu1ZQxPEY" params="controls=1"></lite-youtube>
    </div>

    <div class="section-collab__video">
      <lite-youtube videoid="fMpu1ZQxPEY" params="controls=1"></lite-youtube>
    </div>

    <div class="section-collab__video">
      <lite-youtube videoid="fMpu1ZQxPEY" params="controls=1"></lite-youtube>
    </div>

  </div>
</section>


<section class="section-sostieni">
  <a href="" class="section-sostieni__container">
    <img src="<?php echo get_stylesheet_directory_uri() ?>/custom/img/image-1.png" alt="">
    <h2>Sostieni il progetto</h2>
  </a>
</section>


<section class="section-faq">
  <div class="section-faq__container">

    <div class="section-faq__title">
      <h2>FAQs</h2>
    </div>

    <div class="section-faq__questions">

      <div class="section-faq__item">
        <button aria-expanded="false">
          <h3 class="section-faq__item-title">Quanto tempo servirà per sviluppare il sito web?</h3>
          <img aria-hidden="true" class="section-faq__item-arrow" loading="lazy" decoding="async" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/plus.svg" alt="">
        </button>
        <div class="section-faq__item-content">
          <p>
            Le tempistiche per la realizzazione di un sito web, variano da progetto a progetto in base alle esigenze e alle specifiche richieste.
            </br></br>
            Tuttavia, si possono fornire delle stime approssimative che variano come detto in precedenza, da circa qualche settimana, fino ad arrivare ai progetti per siti web più complessi e complicati che possono arrivare anche a pochi mesi. 
            Se hai bisogno di più informazioni riguardo alle possibili tempistiche del tuo sito web non esitare a contattarci.
          </p>
        </div>
      </div>

      <div class="section-faq__item">
        <button aria-expanded="false">
          <h3 class="section-faq__item-title">Quanto tempo servirà per sviluppare il sito web?</h3>
          <img aria-hidden="true" class="section-faq__item-arrow" loading="lazy" decoding="async" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/plus.svg" alt="">
        </button>
        <div class="section-faq__item-content">
          <p>
            Le tempistiche per la realizzazione di un sito web, variano da progetto a progetto in base alle esigenze e alle specifiche richieste.
            </br></br>
            Tuttavia, si possono fornire delle stime approssimative che variano come detto in precedenza, da circa qualche settimana, fino ad arrivare ai progetti per siti web più complessi e complicati che possono arrivare anche a pochi mesi. 
            Se hai bisogno di più informazioni riguardo alle possibili tempistiche del tuo sito web non esitare a contattarci.
          </p>
        </div>
      </div>

      <div class="section-faq__item">
        <button aria-expanded="false">
          <h3 class="section-faq__item-title">Quanto tempo servirà per sviluppare il sito web?</h3>
          <img aria-hidden="true" class="section-faq__item-arrow" loading="lazy" decoding="async" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/plus.svg" alt="">
        </button>
        <div class="section-faq__item-content">
          <p>
            Le tempistiche per la realizzazione di un sito web, variano da progetto a progetto in base alle esigenze e alle specifiche richieste.
            </br></br>
            Tuttavia, si possono fornire delle stime approssimative che variano come detto in precedenza, da circa qualche settimana, fino ad arrivare ai progetti per siti web più complessi e complicati che possono arrivare anche a pochi mesi. 
            Se hai bisogno di più informazioni riguardo alle possibili tempistiche del tuo sito web non esitare a contattarci.
          </p>
        </div>
      </div>

      <div class="section-faq__item">
        <button aria-expanded="false">
          <h3 class="section-faq__item-title">Quanto tempo servirà per sviluppare il sito web?</h3>
          <img aria-hidden="true" class="section-faq__item-arrow" loading="lazy" decoding="async" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/plus.svg" alt="">
        </button>
        <div class="section-faq__item-content">
          <p>
            Le tempistiche per la realizzazione di un sito web, variano da progetto a progetto in base alle esigenze e alle specifiche richieste.
            </br></br>
            Tuttavia, si possono fornire delle stime approssimative che variano come detto in precedenza, da circa qualche settimana, fino ad arrivare ai progetti per siti web più complessi e complicati che possono arrivare anche a pochi mesi. 
            Se hai bisogno di più informazioni riguardo alle possibili tempistiche del tuo sito web non esitare a contattarci.
          </p>
        </div>
      </div>

      <div class="section-faq__item">
        <button aria-expanded="false">
          <h3 class="section-faq__item-title">Quanto tempo servirà per sviluppare il sito web?</h3>
          <img aria-hidden="true" class="section-faq__item-arrow" loading="lazy" decoding="async" src="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/plus.svg" alt="">
        </button>
        <div class="section-faq__item-content">
          <p>
            Le tempistiche per la realizzazione di un sito web, variano da progetto a progetto in base alle esigenze e alle specifiche richieste.
            </br></br>
            Tuttavia, si possono fornire delle stime approssimative che variano come detto in precedenza, da circa qualche settimana, fino ad arrivare ai progetti per siti web più complessi e complicati che possono arrivare anche a pochi mesi. 
            Se hai bisogno di più informazioni riguardo alle possibili tempistiche del tuo sito web non esitare a contattarci.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>


<main class="grid grid--center">
  <div class="col-100">
    <?php the_content(); ?>
  </div>
</main>

<?php endwhile; else :?>

<p><?php esc_html_e('Non è stato trovato nessun articolo corrisondente alla tua ricerca, prova a cercare altro', 'pcfissoportatile');?></p>

<?php endif; ?>

<?php get_footer();?>