<div class="row">
<div class="col s12 m8 l8">
      <div class="card painel-noticias">
        <?php query_posts('showposts=1&tag=destaque1');?>
        <?php if (have_posts()): while (have_posts()) : the_post();?>


          <a href="<?php the_Permalink()?>" title="<?php the_title();?>">

		<div class="bloco-img-noticias especiais-img" style="background: url('<?php the_post_thumbnail_url('slider-noticias');; ?>');">

          </div></a>
          <div class="categoria nocanto1">
              <?php $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<a class="chip orange white-text z-depth-1-half" href="'. esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                    }?>
          </div>
          <div class="bloco-des-noticias">
              <span class="destaque-chamada">
                    <?php echo get_post_meta( $post->ID,'chamada', true )?>
                </span>
              <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="destaque-titulo orange-text darken-2">
                <?php
                $tituloPost = get_the_title();
                $tituloCapa = get_post_meta( $post->ID,'titulo-capa', true );
                if(empty($tituloCapa)){
                   $titulo = $tituloPost;
                }else{
                  $titulo = $tituloCapa;
                }
                echo $titulo;
                ?>
              </a>
              <span class="destaque-resumo hide-on-med-and-down"><?php $DestaqueChamada = get_post_meta( $post->ID,'chamada-destaque1', true ); echo $DestaqueChamada;?></span>
          </div>
          <div class="nocanto4 tamanho-icones">
            <?php include(TEMPLATEPATH.'/mod-social.php');?>
          </div>
        <?php endwhile;endif;?>
        <div class="clearfix"></div>
      </div>
</div>


  <div class="col s12 m4 l4">
      <div class="card painel-noticias">
        <?php query_posts('showposts=1&tag=destaque2');?>



        <?php if (have_posts()): while (have_posts()) : the_post();?>
            <a href="<?php the_Permalink()?>" title="<?php the_title();?>">

          <div class="bloco-img-noticias2 especiais-img img-slider efeito" style="background: url('<?php the_post_thumbnail_url('slider-noticias');; ?>');">

          </div>  </a>
     <div class="categoria nocanto1">
              <?php $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<a class="chip orange white-text z-depth-1-half" href="'. esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                    }?>
          </div>
          <div class="bloco-des-noticias2">
              <div class="card-content">
                  <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="white-text destaque-fonte">
                    <?php
                    $tituloPost = get_the_title();
                    $tituloCapa = get_post_meta( $post->ID,'titulo-capa', true );
                    if(empty($tituloCapa)){
                       $titulo = $tituloPost;
                    }else{
                      $titulo = $tituloCapa;
                    }
                    echo $titulo;
                    ?>
                  </a>
              </div>
          </div>
          <div class="nocanto4 tamanho-icones">
              <?php include(TEMPLATEPATH.'/mod-social-white.php');?>
          </div>
      </div>
    <?php endwhile;endif;?>
    <div class="clearfix"></div>
  </div>

</div>

<div class="row">

<div class="col s12 m4">
      <div class="card painel-noticias">
        <?php query_posts('showposts=1&tag=destaque3');?>



        <?php if (have_posts()): while (have_posts()) : the_post();?>
          <a href="<?php the_Permalink()?>" title="<?php the_title();?>">

          <div class="bloco-img-noticias3 especiais-img" style="background: url('<?php the_post_thumbnail_url('thumbnews');; ?>');">
          </div></a>
          <div class="categoria nocanto1">
              <?php $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<a class="chip orange white-text z-depth-1-half" href="'. esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                    }?>
          </div>
          <div class="bloco-des-noticias3">
              <span class="destaque-chamada">   <?php echo get_post_meta( $post->ID,'chamada', true )?> </span>
              <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="destaque-fonte orange-text darken-2">
                <?php
                $tituloPost = get_the_title();
                $tituloCapa = get_post_meta( $post->ID,'titulo-capa', true );
                if(empty($tituloCapa)){
                   $titulo = $tituloPost;
                }else{
                  $titulo = $tituloCapa;
                }
                echo $titulo;
                ?>
              </a>
          </div>
          <div class="nocanto4 tamanho-icones">
                <?php include(TEMPLATEPATH.'/mod-social.php');?>
          </div>
      </div>
    <?php endwhile;endif;?>
    <div class="clearfix"></div>
  </div>

  <div class="col s12 m4">
      <div class="card painel-noticias">
        <?php query_posts('showposts=1&tag=destaque4');?>



        <?php if (have_posts()): while (have_posts()) : the_post();?>
          <div class="bloco-img-noticias2 especiais-img orange darken-2">
            <div class="categoria nocanto1">
                <?php $categories = get_the_category();
                  if ( ! empty( $categories ) ) {
                      echo '<a class="chip orange white-text z-depth-1-half" href="'. esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                      }?>
            </div>
          </div>
          <div class="bloco-des-noticias4">
              <div class="card-content">
                  <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="white-text">
                    <?php
                    $tituloPost = get_the_title();
                    $tituloCapa = get_post_meta( $post->ID,'titulo-capa', true );
                    if(empty($tituloCapa)){
                       $titulo = $tituloPost;
                    }else{
                      $titulo = $tituloCapa;
                    }
                    echo $titulo;
                    ?>
                  </a>
              </div>
          </div>
          <div class="nocanto4 tamanho-icones">
                <?php include(TEMPLATEPATH.'/mod-social-white.php');?>
          </div>
      </div>
    <?php endwhile;endif;?>
    <div class="clearfix"></div>
  </div>

  <div class="col s12 m4">
      <div class="card painel-noticias">
        <?php query_posts('showposts=1&tag=destaque5');?>

        <?php
        global $short_url;
        // Checar se ja existe um URL encurtado armazenado no banco de dados
        if(get_post_meta($post->ID, "short_url", true) != ""){
          //Short URL already exists, pull from post meta
          $short_url = get_post_meta($post->ID, "short_url", true);
        }
        else {
          // Caso não tenha, vamos criar uma
          $full_url = get_permalink();
          $short_url = make_bitly_url($full_url);
          // Salvar no port_meta
          add_post_meta($post->ID, 'short_url', $short_url, true);
        }
        ?>

        <?php if (have_posts()): while (have_posts()) : the_post();?>
          <a href="<?php the_Permalink()?>" title="<?php the_title();?>">

          <div class="bloco-img-noticias3 especiais-img" style="background: url('<?php the_post_thumbnail_url('thumbnews');; ?>');">
          </div></a>
          <div class="categoria nocanto1">
              <?php $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<a class="chip orange white-text z-depth-1-half" href="'. esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                    }?>
          </div>
          <div class="bloco-des-noticias3">
              <span class="destaque-chamada">    <?php echo get_post_meta( $post->ID,'chamada', true )?> </span>
              <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="destaque-fonte orange-text darken-2">
                <?php
                $tituloPost = get_the_title();
                $tituloCapa = get_post_meta( $post->ID,'titulo-capa', true );
                if(empty($tituloCapa)){
                   $titulo = $tituloPost;
                }else{
                  $titulo = $tituloCapa;
                }
                echo $titulo;
                ?>
              </a>
          </div>
          <div class="nocanto4 tamanho-icones">
                <?php include(TEMPLATEPATH.'/mod-social.php');?>
          </div>
      </div>
    <?php endwhile;endif;?>
    <div class="clearfix"></div>
  </div>

</div>
