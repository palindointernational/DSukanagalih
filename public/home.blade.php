<script>
  const beamsClient = new PusherPushNotifications.Client({
    instanceId: '326e4fe0-470e-4cdf-ac94-227f7407f175',
  });

  beamsClient.start()
    .then(() => beamsClient.addDeviceInterest('hello'))
    .then(() => console.log('Successfully registered and subscribed!'))
    .catch(console.error);
</script>