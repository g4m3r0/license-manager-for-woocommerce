<?php defined('ABSPATH') || exit; ?>

<div class="wrap">

    <h1><?=__('Edit Generator', 'lima'); ?></h1>

    <form method="post" action="<?=admin_url('admin-post.php');?>">
        <input type="hidden" name="action" value="LM_save_generator">
        <table class="form-table">
            <tbody>
                <tr scope="row">
                    <th scope="row"><label for="name"><?=__('Name', 'lima');?></label></th>
                    <td>
                        <input name="name" id="name" class="regular-text" type="text">
                        <p class="description" id="tagline-description"><?=__('A short name to describe the generator.', 'lima');?></p>
                    </td>
                </tr>
                <tr scope="row">
                    <th scope="row"><label for="charset"><?=__('Character map', 'lima');?></label></th>
                    <td>
                        <input name="charset" id="charset" class="regular-text" type="text">
                        <p class="description" id="tagline-description"><?=__('Characters used for the license key generation', 'lima');?></p>
                    </td>
                </tr>
                <tr scope="row">
                    <th scope="row"><label for="chunks"><?=__('Number of chunks', 'lima');?></label></th>
                    <td>
                        <input name="chunks" id="chunks" class="regular-text" type="text">
                    </td>
                </tr>
                <tr scope="row">
                    <th scope="row"><label for="chunk_length"><?=__('Chunk length', 'lima');?></label></th>
                    <td>
                        <input name="chunk_length" id="chunk_length" class="regular-text" type="text">
                    </td>
                </tr>
                <tr scope="row">
                    <th scope="row"><label for="separator"><?=__('Separator', 'lima');?></label></th>
                    <td><input name="separator" id="separator" class="regular-text" type="text"></td>
                </tr>
                <tr scope="row">
                    <th scope="row"><label for="prefix"><?=__('Prefix', 'lima');?></label></th>
                    <td><input name="prefix" id="prefix" class="regular-text" type="text"></td>
                </tr>
                <tr scope="row">
                    <th scope="row"><label for="suffix"><?=__('Suffix', 'lima');?></label></th>
                    <td><input name="suffix" id="suffix" class="regular-text" type="text"></td>
                </tr>
                <tr scope="row">
                    <th scope="row"><label for="expires_in"><?=__('Expires in', 'lima');?></label></th>
                    <td>
                        <input name="expires_in" id="expires_in" class="regular-text" type="text">
                        <p class="description" id="tagline-description"><?=__('Number of days for which the license is valid after generation.', 'lima');?></p>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="submit">
            <input name="submit" id="submit" class="button button-primary" value="<?=__('Update' ,'lima');?>" type="submit">
        </p>
    </form>


</div>