<!-- Footer START -->
<footer class="footer_sec c-padd">
            <div class="bg_img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ftr_bg_img.png" width="1920" height="518" alt="">
            </div>
            <div class="container-fluid">
                <div class="ftr_con">
				<a href="<?php echo esc_url(home_url('/')); ?>">
				<?php
						// Get the logo image URL from the ACF option field
						$ftr_logo_image = get_field('ftr_logo_image', 'option');
						
						// Display the logo image
						echo '<img src="' . esc_url($ftr_logo_image['url']) . '" alt="' . get_bloginfo('name') . '">';
						?>
					</a>
                    <p><?php echo date('Y');  ?> <?php echo get_field('footer_text','option') ?></p>
                    <?php
					wp_nav_menu(array(
						'theme_location' => 'footer',   // Location registered in functions.php
						'menu_class'     => '',         // No additional class for the ul element
						'container'      => false,      // Remove the default container div
						'items_wrap'     => '<ul>%3$s</ul>', // Preserve your ul and li structure
					));
					?>
                    
                    <div class="social_link">
                        <a href="<?php echo get_field('facebook_link','options'); ?>">
                            <div class="social_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M18 2H15C13.6739 2 12.4021 2.52678 11.4645 3.46447C10.5268 4.40215 10 5.67392 10 7V10H7V14H10V22H14V14H17L18 10H14V7C14 6.73478 14.1054 6.48043 14.2929 6.29289C14.4804 6.10536 14.7348 6 15 6H18V2Z" stroke="#121212" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </a>
                        <a href="<?php echo get_field('youtube_link','options'); ?>">
                            <div class="social_icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M2.5 17C1.80142 13.7033 1.80142 10.2967 2.5 7C2.59179 6.66521 2.76914 6.36007 3.01461 6.11461C3.26008 5.86914 3.56521 5.69179 3.9 5.6C9.26345 4.71146 14.7366 4.71146 20.1 5.6C20.4348 5.69179 20.7399 5.86914 20.9854 6.11461C21.2309 6.36007 21.4082 6.66521 21.5 7C22.1986 10.2967 22.1986 13.7033 21.5 17C21.4082 17.3348 21.2309 17.6399 20.9854 17.8854C20.7399 18.1309 20.4348 18.3082 20.1 18.4C14.7366 19.2887 9.26343 19.2887 3.9 18.4C3.56521 18.3082 3.26008 18.1309 3.01461 17.8854C2.76914 17.6399 2.59179 17.3348 2.5 17Z" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M10 15L15 12L10 9V15Z" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </a>
                        <a href="<?php echo get_field('twitter_link','options'); ?>">
                            <div class="social_icon social_icon1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                                    <path d="M2.60477 2.49014H2.31998L2.48107 2.72499L8.867 12.0346L2.62786 19.2621L2.41376 19.5101H2.74141H4.14047H4.20917L4.25405 19.4581L9.66041 13.1911L13.9503 19.445L13.995 19.5101H14.074H19.36H19.6448L19.4837 19.2753L12.809 9.54536L18.6812 2.73812L18.8952 2.49014H18.5677H17.1729H17.1042L17.0593 2.54212L12.0148 8.38637L8.01447 2.55528L7.96978 2.49014H7.89078H2.60477ZM14.6162 18.3301L4.56018 3.67014H7.34857L17.4046 18.3301H14.6162Z" fill="white" stroke="white" stroke-width="0.3"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    <!-- Footer END -->
    </main>
    <!--Plugins Js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollTrigger/1.0.6/ScrollTrigger.min.js" integrity="sha512-+LXqbM6YLduaaxq6kNcjMsQgZQUTdZp7FTaArWYFt1nxyFKlQSMdIF/WQ/VgsReERwRD8w/9H9cahFx25UDd+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.js" integrity="sha512-UU0D/t+4/SgJpOeBYkY+lG16MaNF8aqmermRIz8dlmQhOlBnw6iQrnt4Ijty513WB3w+q4JO75IX03lDj6qQNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js" integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Theme Js -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
    <?php wp_footer(); ?>
</body>
</html>