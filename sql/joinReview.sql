SELECT players.playerid, players.name, playerreviews.review
FROM players Inner JOIN playerreviews 
ON players.playerid = playerreviews.playerid
