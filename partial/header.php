<!-- header.php -->
<header>

	<img src="img/Spotify_logo.png" alt="">

	<?php if ($axios_db_mode) { ?>

		<div class="select_box">
			<label for="filter1">Filter by</label>
			<select id="filter1" v-model="filter1Selected" @change="filter2Selected=''">
				<option value="">none</option>
				<option v-for="filter1 in Object.keys(filterLists)" :value="filter1">{{cap(filter1)}}
				</option>
			</select>
			<select id="filter2" v-model="filter2Selected" @change="filter2Selection(filter2Selected)" v-if="filter1Selected">
				<option value="">Filter by {{cap(filter1Selected)}}</option>
				<option v-for="filter2 in filterLists[filter1Selected]" :value="filter2">{{filter2}}
				</option>
			</select>
			<label for="sort">Sort by</label>
			<select id="sort" v-model="sortSelected" @change="sortFilter">
				<option value="">none</option>
				<option v-for="sort in Object.keys(filterLists)" :value="sort">{{cap(sort)}}
				</option>
			</select>
		</div>

	<?php } ?>

</header>
