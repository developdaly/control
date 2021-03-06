<?php
/**
 * Template Name: My Tasks
 *
 * @package control
 */

$user = wp_get_current_user();

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

			<?php if( is_user_logged_in() ) { ?>
			<meta id="userid" data-userid="<?php echo $user->ID; ?>">
			<table class="table table-striped table-bordered table-tasks">
				<thead>
					<tr>
						<th width="25%">Title</th>
						<th width="15%">Status</th>
						<th width="15%">Priority</th>
						<th width="15%">Assigned</th>
						<th width="15%">Due Date</th>
						<th width="15%">Created</th>
					</tr>
				</thead>
				<tbody>

				</tbody>
				<tfoot>
					<tr>
						<th>Title</th>
						<th>Status</th>
						<th>Priority</th>
						<th>Assigned</th>
						<th>Due Date</th>
						<th>Created</th>
					</tr>
				</tfoot>
			</table>
			<?php } else { ?>

			<div class="alert alert-warning">

				You must be logged in to new dashboard tasks.

			</div>

			<?php } ?>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
