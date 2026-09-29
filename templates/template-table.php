<?php /* Template Name: Table */ get_header(); ?>
<?php global $theme_; ?>  

	<main role="main">
		<!-- section -->
		<section class="container-fluid background-container">

			<h1><?php //the_title(); ?></h1>


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="col-md-12">
				<h1 class="title_line text-center"><span><?php the_title(); ?></span></h1>
				</div>
				<div class="col-md-12">		
			      <div id="toolbar">
			        <select class="form-control">
			          <option value="">Export Basic</option>
			          <option value="all">Export All</option>
			          <option value="selected">Export Selected</option>
			        </select>
			      </div>
			      <table id="table"
			        data-toggle="table"
			        data-height="0"
			        data-show-toggle="true"
			        data-show-columns="true"
			        data-show-export="true"
			        data-click-to-select="true"
			        data-toolbar="#toolbar"
			        data-pagination="true"
					data-side-pagination="server"
			        data-search="true"
			        data-detail-view="true"
			        data-showRefresh="true"
			        data-detail-formatter="detailFormatter"
			        data-filter-control="true"
			        data-url="http://localhost/consultas/consultas/lista_especies_nativas">
			        <thead>
			          <tr>
            			<th data-field="nombre" data-sortable="true"> Nombre</th>
			            <!-- <th data-field="checkbox"    data-checkbox="true"                                                      >           </th>
			            <th data-field="post_author" data-sortable="true"  data-filter-control="select"  data-visible="true"   >Rank       </th>
			            <th data-field="post_date"   data-sortable="true"  data-filter-control="input"   data-visible="false"  >Flag       </th>
			            <th data-field="post_content" data-sortable="true"  data-filter-control="select"  data-visible="true"   >Country    </th>
			            <th data-field="post_title"  data-sortable="true"  data-filter-control="select"  data-visible="false"  >Population </th>
			            <th data-field="post_status" data-sortable="true"  data-filter-control="select"  data-visible="true"   >Date       </th>
			            <th data-field="post_name"  data-sortable="true"  data-filter-control="select"  data-visible="false"  >% of world </th>
			            <th data-field="guid"    data-sortable="true"  data-filter-control="select"  data-visible="true"   >Language   </th> -->
			          </tr>
			        </thead>
			      </table>
				</div>				
				<br class="clear">
				<?php //edit_post_link(); ?>
			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
