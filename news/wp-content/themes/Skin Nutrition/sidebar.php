<?php global $titan; ?></td><td width=200 valign=top>
<div id="sidebar" style="margin-left: 90px">
	<?php if ($titan->sideboxState() != 'true' ){ ?>
		<div id="sidebox">
		</div><!--end sidebox-->
	<?php } ?>

	<?php if ( is_active_sidebar( 'normal_sidebar' )) echo "<ul>" ?>
	<?php if ( !function_exists( 'dynamic_sidebar')|| !dynamic_sidebar( 'normal_sidebar' )) : ?>
		<ul>
			<li class="widget widget_recent_entries">
				<h2 class="widgettitle"><?php _e( 'Recent Articles', 'titan'); ?></h2>
				<ul>
					<?php $side_posts = get_posts( 'numberposts=10'); foreach($side_posts as $post) : ?>
					<li><a href= "<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</li>
			<li class="widget widget_categories">
				<h2 class="widgettitle"><?php _e( 'Categories', 'titan'); ?></h2>
				<ul>
					<?php wp_list_cats( 'sort_column=name&hierarchical=0'); ?>
				</ul>
			</li>
			<li class="widget widget_archive">
				<h2 class="widgettitle"><?php _e( 'Archives', 'titan'); ?></h2>
				<ul>
					<?php wp_get_archives( 'type=monthly'); ?>
				</ul>
			</li>
		</ul>
	<?php endif; ?>
	<?php if ( is_active_sidebar( 'normal_sidebar' )) echo "</ul>" ?>
</div>
<p style="visibility:hidden;">
<a href="http://buysafecheapviagraonline.com/">Buy Cheap Viagra Online Without Prescription</a>
<a href="http://buy-cialisonline.net">Buy Cheap Cialis Online</a>
<a href="http://buylevitracheaponline.com">buy cheap levitra online</a>
<a href="http://buyultramcheaponline.com/">Buy cheap Ultram Online</a>
<a href="http://trustedpillsonline.net/buy-generic-ultracet-tricare-37-5mg-online/">buy ultracet online</a>
<a href="http://trustedpillsonline.net/buy-actos-glustin-glizone-pioglitazone-hydrochloride/">Buy Actos</a>
<a href="http://trustedpillsonline.net/buy-lipitor-atorvastatin-atorbest-agitor-atorlip-lipvas-torvast-totalip/">Buy Lipitor</a>
<a href="http://trustedpillsonline.net/buy-metformin-hydrochloride-hcl-glucophage-glumetza-phage-riomet-fortamet-obimet-diaformin-500-mg-or-850-mg-online/">Buy Metformin</a>
<a href="http://trustedpillsonline.net/buy-zyprexa-zalasta-zolafren-olanzapine/">buy zyprexa</a>
<a href="http://buy-acaiberry.info">buy acai berry</a>
<a href="http://trustedpillsonline.net/">Best Pills</a>
<a href="http://buyphenterminepills.info/">Buy Phentermine Pills</a>
<a href="http://trustedpillsonline.net/buy-lamotrigine-lamictal-lamictin-lamogine-laminor/">buy lamotrigine</a>
<a href="http://trustedpillsonline.net/buy-risperidone-risperdal/">buy risperdal</a>
<a href="http://trustedpillsonline.net/buy-cozaar-losartan-potassiumlos-pot-online/">buy cozaar</a>
<a href="http://trustedpillsonline.net/buy-bimatoprost-lumigan-latisse-online/">buy bimatoprost</a>
<a href="http://trustedpillsonline.net/buy-aricept-donepezil-online/">buy aricept</a>
<a href="http://trustedpillsonline.net/buy-lotrisone-clotrimazole-lotril-cazol-b/">buy clotrimazole</a>
<a href="http://trustedpillsonline.net/buy-mysoline-primidone-250mg-online-prysoline-liskantin-resimatil/">buy mysoline</a>
<a href="http://buy-cheap-phentermine-here.com">buy cheap phentermine online</a>
<a href="http://order-phentermine-online.com">order phentermine 37.5 online</a>
</p><!--end sidebar-->