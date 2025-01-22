docker-run:
	@docker run -it --name converter -p 8001:80  converter:1.0

docker-build:
	@docker build --no-cache -t converter:1.0 .

docker-container-inspect-converter:
	@docker inspect converter

docker-info:
	@docker info

docker-container-top:
	@docker container top

docker-networks-ls:
	@docker network -ls

docker-project-bash:
	@docker exec -it  converter-project-converter-1 bash
# docker exec -it  converter-project-converter-1 bash