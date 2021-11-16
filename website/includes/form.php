<form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                <fieldset>
                    <label for="first_name">First Name:</label>
                    <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">
                    <span class="error"><?php echo $first_name_error; ?></span>

                    <label for="last_name">Last Name:</label>
                    <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">
                    <span class="error"><?php echo $last_name_error; ?></span>

                    <label for="email">Email:</label>
                    <input type="text" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
                    <span class="error"><?php echo $email_error; ?></span>

                    <label for="phone">Phone Number</label>
                    <input type="tel" placeholder="xxx-xxx-xxxx" name="phone" value="<?php echo $sticky_phone;?>">
                    <span class="error"><?php echo $phone_error;?></span>

                    <label for="bike_type">Bike Type (Choose one):</label>
                    <ul>
                        <li><input type="radio" name="bike_type" value="road" <?php if(isset($_POST['bike_type']) && $_POST['bike_type'] == 'road') echo 'checked="checked"' ;?>>Road</li>
                        <li><input type="radio" name="bike_type" value="mtn" <?php if(isset($_POST['bike_type']) && $_POST['bike_type'] == 'mtn') echo 'checked="checked"' ;?>>MTN</li>
                        <li><input type="radio" name="bike_type" value="commuter" <?php if(isset($_POST['bike_type']) && $_POST['bike_type'] == 'commuter') echo 'checked="checked"' ;?>>Commuter</li>
                        <li><input type="radio" name="bike_type" value="bmx" <?php if(isset($_POST['bike_type']) && $_POST['bike_type'] == 'bmx') echo 'checked="checked"' ;?>>BMX</li>
                        <li><input type="radio" name="bike_type" value="track" <?php if(isset($_POST['bike_type']) && $_POST['bike_type'] == 'track') echo 'checked="checked"' ;?>>Track</li>
                        <li><input type="radio" name="bike_type" value="other" <?php if(isset($_POST['bike_type']) && $_POST['bike_type'] == 'other') echo 'checked="checked"' ;?>>Other (describe in comments)</li>
                    </ul>
                    <span class="error"><?php echo $bike_type_error; ?></span>

                    <label for="frame_size">Frame size (cm):</label>
                    <select name="frame_size">
                        <option value="" NULL <?php if(isset($_POST['frame_size']) && $_POST['frame_size'] == NULL) echo 'selected'; ?>>Select one</option>
                        <?php
                            for ($x = 48; $x <= 63; $x++) {
                                echo '<option value="'.$x.'" ';
                                if(isset($_POST['frame_size']) && $_POST['frame_size'] == $x){
                                    echo 'selected>'.$x.'</option>';
                                }else{
                                    echo '>'.$x.'</option>';
                                }
                            } 
                        ?>
                    </select>
                    <span class="error"><?php echo $frame_size_error;?></span>

                    <label for="wheel_size">Wheel Size:</label>
                    <ul>
                        <li><input type="radio" name="wheel_size" value='24' <?php if(isset($_POST['wheel_size']) && $_POST['wheel_size'] == '24') echo 'checked="checked"';?>>24"</li>
                        <li><input type="radio" name="wheel_size" value='26' <?php if(isset($_POST['wheel_size']) && $_POST['wheel_size'] == '26') echo 'checked="checked"';?>>26"</li>
                        <li><input type="radio" name="wheel_size" value='650' <?php if(isset($_POST['wheel_size']) && $_POST['wheel_size'] == '650') echo 'checked="checked"';?>>650b</li>
                        <li><input type="radio" name="wheel_size" value='700' <?php if(isset($_POST['wheel_size']) && $_POST['wheel_size'] == '700') echo 'checked="checked"';?>>700c</li>
                        <li><input type="radio" name="wheel_size" value='29' <?php if(isset($_POST['wheel_size']) && $_POST['wheel_size'] == '29') echo 'checked="checked"';?>>29"</li>
                        <li><input type="radio" name="wheel_size" value='other' <?php if(isset($_POST['wheel_size']) && $_POST['wheel_size'] == 'other') echo 'checked="checked"';?>>Other (specify in comments)</li>
                    </ul>
                    <span class="error"><?php echo $wheel_size_error; ?></span>

                    <label for="features">Features (Optional)</label>
                    <ul>
                        <li><input type="checkbox" name="features[0]" value="fender_eyelets" <?php if(isset($_POST['features']) && in_array('fender_eyelets',$features)) echo 'checked="checked"';?>>Fender Eyelets</li>
                        <li><input type="checkbox" name="features[1]" value="rack_mounts" <?php if(isset($_POST['features']) && in_array('rack_mounts', $features)) echo 'checked="checked"'; ?>>Rack Mounts</li>
                        <li><input type="checkbox" name="features[2]" value="adjustable_dropouts" <?php if(isset($_POST['features']) && in_array('adjustable_dropouts', $features)) echo 'checked="checked"'; ?>>Adjustable Dropouts</li>
                        <li><input type="checkbox" name="features[3]" value="canti_posts" <?php if(isset($_POST['features']) && in_array('canti_posts', $features)) echo 'checked="checked"'; ?>>Cantilever Posts</li>
                    </ul>

                    <label for="comments">Comments/Specific Requests</label>
                    <textarea name="comments" ><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']);?></textarea>
                    <span class="error"><?php echo $comments_error;?></span>

                    <label for="privacy">Privacy</label>
                    <ul>
                        <li><input type="radio" name="privacy" <?php if(isset($_POST['privacy'])) echo 'checked="checked"';?>>I agree</li>
                    </ul>
                    <span class="error"><?php echo $privacy_error;?></span>
                    
                    <input type="submit" value="Submit">
                    <p><a href="">Reset</a></p>        
                </fieldset>
            </form>