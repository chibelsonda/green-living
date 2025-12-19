<?php require APPROOT . '/views/inc/main/header.php'; ?>
 
 <!-- MAIN -->
 <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-primary text-center">
            <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">About Us</h1>
        </header>
        <div class="section background-white"> 
          <div class="line">
            <h2 class="text-size-30"><?php echo $data['companyProfile']->title;?></h2>
            <div class="s-12 m-12 l-4 margin-m-bottom">
            <a class="image-hover-zoom margin-bottom-30" href="#">
              <img src="<?php echo URLROOT; ?>/public/image/office.jpg" alt="">
            </a>
          </div>
            <p class="margin-bottom-30"> 
                <?php echo $data['companyProfile']->body;?>
            </p> 

            <div class="line">
              <div class="margin">
                <div class="s-12 m-12 l-6 margin-m-bottom-30">
                  <h2><?php echo $data['vision']->title;?></h2>
                  <p>
                      <?php echo $data['vision']->body;?>
                  </p>
                </div>
                <div class="s-12 m-12 l-6">
                  <h2><?php echo $data['mission']->title;?></h2>
                  <p>
                      <?php echo $data['mission']->body;?>
                  </p>
                </div>
              </div>  
            </div>
          </div>
        </div> 
      </article>
    </main>

    <?php require APPROOT . '/views/inc/main/footer.php';?>