FROM node:20 AS dev

WORKDIR /web
ENV PATH ./node_modules/.bin/:$PATH

COPY package*.json ./
RUN yarn install
COPY . ./

EXPOSE 3000
EXPOSE 24678

CMD ["yarn", "dev"]
