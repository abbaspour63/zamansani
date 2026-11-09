<?php get_header(); ?>

<main class="max-w-7xl mx-auto px-6 py-12">

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <article class="mb-8">

                <h2 class="text-2xl font-bold text-[#3D3D3D] mb-4">
                    <a href="<?php the_permalink(); ?>"
                       class="hover:text-[#468432]">
                        <?php the_title(); ?>
                    </a>
                </h2>

                <div class="text-gray-600 leading-8">
                    <?php the_content(); ?>
                </div>

            </article>

        <?php endwhile; ?>

    <?php else : ?>

        <p>محتوایی وجود ندارد.</p>

    <?php endif; ?>
    

</main>
<?php get_footer(); ?>
