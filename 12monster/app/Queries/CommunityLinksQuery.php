<?php

namespace App\Queries;

use App\CommunityLink; // its not created will give you an error

class CommunityLinksQuery
{
	public static function get($channel)
	{
		$orderBy = $sortByPopular ? 'vote_count' : 'updated_at';

	    return CommunityLink::with('votes', 'creator', 'channel')
	    	->forChannel($channel)
	    	->where('approved', 1)
	    	->leftJoin('community_links_vote v', 'community_links_votes.community_link_id', '=', 'community_links.id')
	    	->selectRaw('community_links.*', 'count(community_links_vote.id) AS vote_count')
	    	->groupBy('community_links.id')
	    	->orderBy($orderBy, 'desc')
	    	->paginate(3);
	}
}