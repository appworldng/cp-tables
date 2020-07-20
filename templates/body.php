<?php
	extract(shortcode_atts(array('type'=>'type'), $type));
	$args = array(
		'post_type' 	=> 'slave',
		'numberposts' 	=> -1,
		'order'			=> 'ASC',
		'orderby' 		=> 'meta_value_num',
		'meta_key' 		=> 'slave_index'
	);
	$posts = get_posts($args);
	global $post; 
    foreach($posts as $post): setup_postdata($post);
    ob_start();
?>
    <tr>
        <td class="show" style="cursor: pointer;">+</td>
        <td><?= get_post_meta($post->ID, 'slave_index', true); ?></td>
        <td><?= get_post_meta($post->ID, 'slave_lastname', true); ?></td>
		<td><?= get_post_meta($post->ID, 'slave_firstname', true); ?></td>	
        <td><?= get_post_meta($post->ID, 'slave_plantation_name', true); ?></td>	
        <td><?= get_post_meta($post->ID, 'slave_owner_lastname', true); ?></td>	
        <td><?= get_post_meta($post->ID, 'slave_owner_firstname', true); ?></td>
		<td><?= get_post_meta($post->ID, 'slave_firsttime', true); ?></td>
    </tr>
    <tr style="display: none;">
        <td colspan="8"><?= get_post_meta($post->ID, 'slave_iands', true); ?></td>
    </tr>
<?php
    endforeach; 
?>
</table>
<?php
    ob_get_clean();
    wp_reset_postdata(); 
?>