import { AppUiAdminPage } from './app.po';

describe('app-ui-admin App', () => {
  let page: AppUiAdminPage;

  beforeEach(() => {
    page = new AppUiAdminPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
